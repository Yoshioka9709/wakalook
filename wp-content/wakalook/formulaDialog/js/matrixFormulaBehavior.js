function inputMatrix(id) {
    isMatrix = true;
    isOneColumn = false;
    isThereTerm = false;

    //まず「行列のオプション」を表示する。
    setChangeMatrixOptionDisplay();

    //新しい数式を追加する要領で行列も追加する。
    let fIndex = getIndexByFormulaIndex(nowIndex);
    formula[fIndex].parts.push({inputMode: id, rowCount: 2, columnCount: 2, canDelete: true, text: "", references: []});
    maxIndex++;

    //数式を追加する。
    for(let row = 0; row < 2; row++) {
        for(let column = 0; column < 2; column++) {
            formula[fIndex].parts[formula[fIndex].parts.length - 1].references.push(maxIndex + row * 2 + column);
            formula.push({whereIs: id, lineIndex: maxLineIndex, formulaIndex: maxIndex + row * 2 + column, row: row, column: column, parent: nowIndex, parts: []});
        }
    }

    //nowIndexを変更する。
    nowIndex = maxIndex;

    //maxIndexを更新する。初期では2×2行列なので、3を足している。
    maxIndex += 3;

    //fdMessageを設定する。
    setFdMessage(id);
}

function inputVervec() {
    isMatrix = true;
    isOneColumn = true;

    //まず行列のオプションを表示する。
    setChangeMatrixOptionDisplay();

    //新しい数式を追加する要領で縦ベクトルも追加する。
    let fIndex = getIndexByFormulaIndex(nowIndex);
    formula[fIndex].parts.push({inputMode: "verVec", rowCount: 2, columnCount: 1, canDelete: true, text: "", references: []});
    maxIndex++;

    //数式を追加する。
    for(let row = 0; row < 2; row++) {
        formula[fIndex].parts[formula[fIndex].parts.length - 1].references.push(maxIndex + row);
        formula.push({whereIs: "verVec", lineIndex: maxLineIndex, formulaIndex: maxIndex + row, row: row, column: 0, parent: nowIndex, parts: []});
    }

    //nowIndexを変更する。
    nowIndex = maxIndex;

    //maxIndexを更新する。
    maxIndex++;

    //fdMessageを設定する。
    setFdMessage("verVec");
}

function inputDivideCase() {
    isMatrix = true;
    isOneColumn = true;

    //まず行列のオプションを表示する。
    setChangeMatrixOptionDisplay();

    //新しい数式を追加する要領で場合分けも追加する。
    let fIndex = getIndexByFormulaIndex(nowIndex);
    formula[fIndex].parts.push({inputMode: "divideCase", rowCount: 2, columnCount: 1, canDelete: true, text: "", references: []});
    maxIndex++;

    //数式を追加する。
    for(let row = 0; row < 2; row++) {
        formula[fIndex].parts[formula[fIndex].parts.length - 1].references.push(maxIndex + row);
        formula.push({whereIs: "divideCase", lineIndex: maxLineIndex, formulaIndex: maxIndex + row, row: row, column: 0, parent: nowIndex, parts: []});
    }

    //nowIndexを変更する。
    nowIndex = maxIndex;

    //maxIndexを更新する。
    maxIndex++;

    //fdMessageを設定する。
    setFdMessage("divideCase");
}

function inputDivideCaseTerm() {
    isMatrix = true;
    isOneColumn = false;
    isThereTerm = true;

    //まず行列のオプションを表示する。
    setChangeMatrixOptionDisplay();

    //新しい数式を追加する要領で場合分けも追加する。
    let fIndex = getIndexByFormulaIndex(nowIndex);
    formula[fIndex].parts.push({inputMode: "divideCaseTerm", rowCount: 2, columnCount: 2, canDelete: true, text: "", references: []});
    maxIndex++;

    //数式を追加する。
    for(let row = 0; row < 2; row++) {
        for(let column = 0; column < 2; column++) {
            formula[fIndex].parts[formula[fIndex].parts.length - 1].references.push(maxIndex + row * 2 + column);
            formula.push({whereIs: "divideCaseTerm", lineIndex: maxLineIndex, formulaIndex: maxIndex + row * 2 + column, row: row, column: column, parent: nowIndex, parts: []});
        }
    }

    //nowIndexを変更する。
    nowIndex = maxIndex;

    //maxIndexを更新する。2×2の行列を追加したので、3を足せばよい。
    maxIndex += 3;

    //fdMessageを設定する。
    setFdMessage("divideCaseTerm");
}

function addMatrixRow() {
    //行列の行を追加する
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);

    //partsの最後の行列を参照する。
    let part = formula[pIndex].parts[formula[pIndex].parts.length - 1];
    let columnCount = part.columnCount;
    let rowCount = part.rowCount;
    maxIndex++;

    //referencesと数式を追加する
    for(let i = 0; i < columnCount; i++) {
        formula[pIndex].parts[formula[pIndex].parts.length - 1].references.push(maxIndex + i);
        formula.push({whereIs: formula[pIndex].parts[formula[pIndex].parts.length - 1].inputMode, lineIndex: maxLineIndex, formulaIndex: maxIndex + i, row: rowCount, column: i, parent: parent, parts: []});
    }

    //maxIndexを更新する。ここでは、列の数だけ追加したので、columnCount-1を追加すればよい。
    maxIndex += columnCount - 1;

    //rowCountを更新する。
    part.rowCount++;

    //プレビューを更新する。
    reloadPreview();
}

function deleteMatrixRow() {
    //行列の行を削除する
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);

    //partsの最後の行列を参照する。
    let part = formula[pIndex].parts[formula[pIndex].parts.length - 1];
    let rowCount = part.rowCount;
    if(rowCount == 1) {
        alert("最後の行を削除することはできません。");
        return;
    }

    //最後の行に編集位置がある場合は、一つ前の行に持ってくる。
    if(formula[fIndex].row == rowCount - 1) {
        let newRow = formula[fIndex].row - 1;
        let column = formula[fIndex].column;
        for(let i = 0; i < part.references.length; i++) {
            let rIndex = getIndexByFormulaIndex(part.references[i]);
            if(formula[rIndex].row == newRow && formula[rIndex].column == column) {
                //編集する位置を変更する。
                nowIndex = part.references[i];
                break;
            }
        }
    }
    
    //referencesと数式を削除する。
    let references = part.references;
    for(let i = 0; i < references.length; i++) {
        let rIndex = getIndexByFormulaIndex(references[i]);
        if(formula[rIndex].row == rowCount - 1) {
            formula.splice(rIndex, 1);
            formula[pIndex].parts[formula[pIndex].parts.length - 1].references.splice(i, 1);
            i--;
        }
    }

    //rowCountを更新する。
    part.rowCount--;

    //プレビューを更新する。
    reloadPreview();
}

function addMatrixColumn() {
    //行列の列を追加する
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);

    //partsの最後の行列を参照する。
    let part = formula[pIndex].parts[formula[pIndex].parts.length - 1];
    let columnCount = part.columnCount;
    let rowCount = part.rowCount;
    maxIndex++;

    //referencesと数式を追加する
    for(let i = 0; i < rowCount; i++) {
        formula[pIndex].parts[formula[pIndex].parts.length - 1].references.push(maxIndex + i);
        formula.push({whereIs: formula[pIndex].parts[formula[pIndex].parts.length - 1].inputMode, lineIndex: maxLineIndex, formulaIndex: maxIndex + i, row: i, column: columnCount, parent: parent, parts: []});
    }

    //maxIndexを更新する。ここでは、行の数だけ追加したので、rowCount-1を追加すればよい。
    maxIndex += rowCount - 1;

    //columnCountを更新する。
    part.columnCount++;

    //プレビューを更新する。
    reloadPreview();
}

function deleteMatrixColumn() {
    //行列の列を削除する
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);

    //partsの最後の行列を参照する。
    let part = formula[pIndex].parts[formula[pIndex].parts.length - 1];
    let columnCount = part.columnCount;
    if(columnCount == 1) {
        alert("最後の列を削除することはできません。");
        return;
    }

    //最後の列に編集位置がある場合は、一つ前の列に持ってくる。
    if(formula[fIndex].column == columnCount - 1) {
        let row = formula[fIndex].row;
        let newColumn = formula[fIndex].column - 1;
        for(let i = 0; i < part.references.length; i++) {
            let rIndex = getIndexByFormulaIndex(part.references[i]);
            if(formula[rIndex].row == row && formula[rIndex].column == newColumn) {
                //編集する位置を変更する。
                nowIndex = part.references[i];
                break;
            }
        }
    }

    //referencesと数式を削除する。
    let references = part.references;
    for(let i = 0; i < references.length; i++) {
        let rIndex = getIndexByFormulaIndex(references[i]);
        if(formula[rIndex].column == columnCount - 1) {
            formula.splice(rIndex, 1);
            formula[pIndex].parts[formula[pIndex].parts.length - 1].references.splice(i, 1);
            i--;
        }
    }

    //columnCountを更新する。
    part.columnCount--;

    //プレビューを更新する。
    reloadPreview();
}

function setChangeMatrixOptionDisplay() {
    //isMatrixの値によって変える。
    const matrixOption = document.getElementById("matrixOption");
    if(isMatrix) {
        matrixOption.style.display = "block";
        const addColumn = document.getElementById("addColumn");
        const deleteColumn = document.getElementById("deleteColumn");
        const goLeft = document.getElementById("goLeft");
        const goRight = document.getElementById("goRight");

        if(isOneColumn) {
            addColumn.style.visibility = "hidden";
            deleteColumn.style.visibility = "hidden";
            goLeft.style.visibility = "hidden";
            goRight.style.visibility = "hidden";
        } else {
            //もし条件付き場合分けの場合は、これを非表示にする。
            if(isThereTerm) {
                addColumn.style.visibility = "hidden";
                deleteColumn.style.visibility = "hidden";
            } else {
                addColumn.style.visibility = "visible";
                deleteColumn.style.visibility = "visible";
            }

            goLeft.style.visibility = "visible";
            goRight.style.visibility = "visible";
        }
    } else {
        matrixOption.style.display = "none";
    }
}

function goUp() {
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);
    
    if(formula[fIndex].row == 0) return;

    let newRow = formula[fIndex].row - 1;
    let column = formula[fIndex].column;
    let references = formula[pIndex].parts[formula[pIndex].parts.length - 1].references;

    for(let i = 0; i < references.length; i++) {
        let rIndex = getIndexByFormulaIndex(references[i]);
        if(formula[rIndex].row == newRow && formula[rIndex].column == column) {
            nowIndex = formula[rIndex].formulaIndex;
            break;
        }
    }

    resetFdMessage();
}

function goDown() {
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);
    let rowCount = formula[pIndex].parts[formula[pIndex].parts.length - 1].rowCount;
    
    if(formula[fIndex].row == rowCount - 1) return;

    let newRow = formula[fIndex].row + 1;
    let column = formula[fIndex].column;
    let references = formula[pIndex].parts[formula[pIndex].parts.length - 1].references;

    for(let i = 0; i < references.length; i++) {
        let rIndex = getIndexByFormulaIndex(references[i]);
        if(formula[rIndex].row == newRow && formula[rIndex].column == column) {
            nowIndex = formula[rIndex].formulaIndex;
            break;
        }
    }

    resetFdMessage();
}

function goLeft() {
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);
    let columnCount = formula[pIndex].parts[formula[pIndex].parts.length - 1].columnCount;

    let newRow, newColumn;
    if(formula[fIndex].column == 0) {
        if(formula[fIndex].row == 0) return;
        newRow = formula[fIndex].row - 1;
        newColumn = columnCount - 1;
    } else {
        newRow = formula[fIndex].row;
        newColumn = formula[fIndex].column - 1;
    }
    
    let references = formula[pIndex].parts[formula[pIndex].parts.length - 1].references;

    for(let i = 0; i < references.length; i++) {
        let rIndex = getIndexByFormulaIndex(references[i]);
        if(formula[rIndex].row == newRow && formula[rIndex].column == newColumn) {
            nowIndex = formula[rIndex].formulaIndex;
            break;
        }
    }

    resetFdMessage();
}

function goRight() {
    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let pIndex = getIndexByFormulaIndex(parent);
    let columnCount = formula[pIndex].parts[formula[pIndex].parts.length - 1].columnCount;
    let rowCount = formula[pIndex].parts[formula[pIndex].parts.length - 1].rowCount;

    let newRow, newColumn;
    if(formula[fIndex].column == columnCount - 1) {
        if(formula[fIndex].row == rowCount - 1) return;
        newRow = formula[fIndex].row + 1;
        newColumn = 0;
    } else {
        newRow = formula[fIndex].row;
        newColumn = formula[fIndex].column + 1;
    }

    let references = formula[pIndex].parts[formula[pIndex].parts.length - 1].references;

    for(let i = 0; i < references.length; i++) {
        let rIndex = getIndexByFormulaIndex(references[i]);
        if(formula[rIndex].row == newRow && formula[rIndex].column == newColumn) {
            nowIndex = formula[rIndex].formulaIndex;
            break;
        }
    }

    resetFdMessage();
}

function getFormedPmatrix(formulaJson, i) {
    //pmatrixを整形した状態で渡す。
    return "\\begin{pmatrix} " + getFormedMatrix(formulaJson, i) + " \\end{pmatrix}";
}

function getFormedBmatrix(formulaJson, i) {
    //bmatrixを整形した状態で渡す。
    return "\\begin{bmatrix} " + getFormedMatrix(formulaJson, i) + " \\end{bmatrix}";
}

function getFormedVmatrix(formulaJson, i) {
    //vmatrixを整形した状態で渡す。
    return "\\begin{vmatrix} " + getFormedMatrix(formulaJson, i) + " \\end{vmatrix}";
}

function getFormedVmatrix2(formulaJson, i) {
    //Vmatrixを整形した状態で渡す。
    return "\\begin{Vmatrix} " + getFormedMatrix(formulaJson, i) + " \\end{Vmatrix}";
}

function getFormedVervec(formulaJson, i) {
    //vervecを整形した状態で渡す。
    return "\\left(  \\begin{array}{c} " + getFormedMatrix(formulaJson, i) + " \\end{array}  \\right)";
}

function getFormedDivideCase(formulaJson, i) {
    //divideCaseを整形した状態で渡す。
    return "\\begin{cases} " + formDivideCase(formulaJson, i, false) + " \\end{cases}";
}

function getFormedDivideCaseTerm(formulaJson, i) {
    //divideCaseTermを整形した状態で渡す。
    return "\\begin{cases} " + formDivideCase(formulaJson, i, true) + " \\end{cases}";
}

function getFormedMatrix(formulaJson, i) {
    //行列を整形して返す。
    let rowCount = formulaJson.parts[i].rowCount;
    let columnCount = formulaJson.parts[i].columnCount;

    let answer = "";
    for(let row = 0; row < rowCount; row++) {
        for(let column = 0; column < columnCount; column++) {
            for(let k = 0; k < formula.length; k++) {
                if(formulaJson.parts[i].references.indexOf(formula[k].formulaIndex) != -1) {
                    if(formula[k].hasOwnProperty('row')) {
                        if(formula[k].row == row && formula[k].column == column) {
                            answer += getFormula(formula[k].formulaIndex);
                        }
                    }
                }
            }
            if(column != columnCount - 1) answer += " & ";
        }
        if(row != rowCount - 1) answer += " \\\\ ";
    }

    return answer;
}

function formDivideCase(formulaJson, i, isTerm) {
    //場合分けを整形して返す。
    let rowCount = formulaJson.parts[i].rowCount;
    let columnCount = formulaJson.parts[i].columnCount;

    let answer = "";
    for(let row = 0; row < rowCount; row++) {
        for(let column = 0; column < columnCount; column++) {
            for(let k = 0; k < formula.length; k++) {
                if(formulaJson.parts[i].references.indexOf(formula[k].formulaIndex) != -1) {
                    if(formula[k].hasOwnProperty('row')) {
                        if(formula[k].row == row && formula[k].column == column) {
                            if(isTerm && column == 1) answer += "(";
                            answer += getFormula(formula[k].formulaIndex);
                            if(isTerm && column == 1) answer += ")";
                        }
                    }
                }
            }
            if(column != columnCount - 1) answer += " & ";
        }
        if(row != rowCount - 1) answer += " \\\\ ";
    }

    return answer;
}