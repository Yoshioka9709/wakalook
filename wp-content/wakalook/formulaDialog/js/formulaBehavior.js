let isItalic = true;



//数式を保存するjsonファイル

let formula = [

    {

        whereIs: "susiki",

        lineIndex: 0,

        formulaIndex: 0,

        parent: -1,

        tag: "-1",

        parts: []

    }

]

let nowIndex = 0;

let maxIndex = 0;

let maxLineIndex = 0;

let isFiniteMoreTwoInput = false;

let isOneColumn = false; //isMatrixがtrueの時のみ参照される。

let isThereTerm = false; //isMatrixがtrueかつisOneColumnがfalseの時のみ参照される。

let inputMode = "susiki";

let isMatrix = false;

let setEqualPos = false;



let isEditFormulaNumberDialog = false;

let isTherePeriod = false;



const cDefColor = "white";

const cDefBackColor = "orange";

const uDefColor = "black";

const uDefBackColor = "white";



let formulaContents = document.getElementsByClassName("formula_content");



for(let i = 0; i < formulaContents.length; i++) {

    formulaContents[i].addEventListener("mouseenter", function(event) {

        event.target.style.color = cDefColor;

        event.target.style.backgroundColor = cDefBackColor;

    }, false);



    formulaContents[i].addEventListener("mouseleave", function(event) {

        event.target.style.color = uDefColor;

        event.target.style.backgroundColor = uDefBackColor;

    }, false);

}



let fdControls = document.getElementsByClassName("fdControl");



for(let i = 0; i < fdControls.length; i++) {

    fdControls[i].addEventListener("mouseenter", function(event) {

        event.target.style.color = cDefColor;

        event.target.style.backgroundColor = cDefBackColor;

    }, false);



    fdControls[i].addEventListener("mouseleave", function(event) {

        event.target.style.color = uDefColor;

        event.target.style.backgroundColor = uDefBackColor;

    }, false);

}



let mControls = document.getElementsByClassName("mControl");



for(let i = 0; i < mControls.length; i++) {

    mControls[i].addEventListener("mouseenter", function(event) {

        event.target.style.color = cDefColor;

        event.target.style.backgroundColor = cDefBackColor;

    }, false);



    mControls[i].addEventListener("mouseleave", function(event) {

        event.target.style.color = uDefColor;

        event.target.style.backgroundColor = uDefBackColor;

    }, false);

}

const formulaDialog = document.getElementById("formulaDialog");

formulaDialog.addEventListener('cancel', () => {

    isInputFormulaDialog = false;

});

function initializeFormulaDialog() {
    //まず一番上で初期化しているものを初期化し直す。

    nowIndex = 0;

    maxIndex = 0;

    maxLineIndex = 0;

    isFiniteMoreTwoInput = false;

    isOneColumn = false;

    isThereTerm = false;

    inputMode = "susiki";

    isMatrix = false;

    setEqualPos = false;

    isEditFormulaNumberDialog = false;

    isTherePeriod = false;

    //setEqualPosをfalseにするにあたって、ボタンの文言を変更する。

    const setEqual = document.getElementById("setEqual");

    setEqual.textContent = "=/→を揃える";



    initializeFormula();

    reloadPreview();

}

function initializeFormula() {

    //formulaを全消去する。

    formula.splice(0);

    //初期値を入力する。

    formula.push({

        whereIs: "susiki",

        lineIndex: 0,

        formulaIndex: 0,

        parent: -1,

        tag: "-1",

        parts: []

    });

}

function doOK() {

    let fIndex = getIndexByFormulaIndex(nowIndex);

    let parent = formula[fIndex].parent;



    if(parent == -1) {

        //このとき、このダイアログは終了する。

        formulaComplete();

    } else {

        //このとき、親の所に戻る。

        let pIndex = getIndexByFormulaIndex(parent);



        //parentIndexのformulaのpartsの中から、nowIndexがreferencesに含まれるものを捜し出し、

        //そのreferencesに含まれる全てのformulaにおいて、partsの長さが0でないかを確認する。

        //もし一つでも0のものがあるなら、何かしら入力してもらうまでやり直してもらう。

        //(これは「一文字開ける」を入力すれば回避できることを意味してはいる。どうしようか検討中。)

        let partIndex = -1;

        for(partIndex = 0; partIndex < formula[pIndex].parts.length; partIndex++) {

            if(formula[pIndex].parts[partIndex].references.indexOf(nowIndex) != -1) break;

        }



        //referencesに含まれているインデックスの数式のpartsが空なら、ダメだというalertを出す。

        for(let i = 0; i < formula[pIndex].parts[partIndex].references.length; i++) {

            let rIndex = getIndexByFormulaIndex(formula[pIndex].parts[partIndex].references[i]);

            if(formula[rIndex].parts.length == 0) {

                //このとき、空である。

                alert("数式を全て入力してください。例えば、分数は分母分子両方ともきちんと入力してください。");

                return;

            }

        }



        //ここまで来られれば、きちんと入力されていることが分かる。

        nowIndex = parent;

        resetFdMessage();

    }

}



function doCancel() {

    let fIndex = getIndexByFormulaIndex(nowIndex);

    let parent = formula[fIndex].parent;



    if(parent == -1) {

        //このとき、このダイアログは終了する。

        isInputFormulaDialog = false;

        formulaDialog.close();

    } else {

        //このとき、親の所に戻るのとともに、

        //親のpartsの最後の要素を削除する必要がある。

        

        let pIndex = getIndexByFormulaIndex(parent);

        let partIndex = -1;

        for(partIndex = 0; partIndex < formula[pIndex].parts.length; partIndex++) {

            if(formula[pIndex].parts[partIndex].references.indexOf(nowIndex) != -1) break;

        }



        //referencesの要素に当たるものを削除する。

        for(let i = 0; i < formula[pIndex].parts[partIndex].references.length; i++) {

            for(let j = 0; j < formula.length; j++) {

                if(formula[j].formulaIndex == formula[pIndex].parts[partIndex].references[i]) {

                    formula.splice(j, 1);

                    j--;

                }

            }

        }



        //該当するpartを削除する。

        formula[pIndex].parts.splice(partIndex, 1);



        nowIndex = parent;

        resetFdMessage();

    }

}



function resetFdMessage() {

    const fdMessage = document.getElementById("fdMessage");

    let fIndex = getIndexByFormulaIndex(nowIndex);



    if(formula[fIndex].parent == -1) {

        fdMessage.textContent = susiki;

        isMatrix = false;

        isFiniteMoreTwoInput = false;

        setChangeInputPlaceDisplay();

        setChangeMatrixOptionDisplay();

        setChangeNewLineDisplay();

        reloadPreview();

    } else {

        setFdMessage();

    }

}



function inputContent(content) {
    let fIndex = getIndexByFormulaIndex(nowIndex);

    formula[fIndex].parts.push({inputMode: "susiki", canDelete: true, text: content, references: [-1]});

    reloadPreview();

}



function makeBlank() {

    inputContent("\\ ");

}



function makeNewLine() {

    maxLineIndex++;

    maxIndex++;

    formula.push({whereIs: "susiki", lineIndex: maxLineIndex, formulaIndex: maxIndex, parent: -1, parts: []});



    //ボタン表示

    setChangeSetEqual();



    //nowIndexを更新する。

    nowIndex = maxIndex;



    resetFdMessage();

}



function setEqualPosition() {

    const blankAnd = " &";

    const setEqual = document.getElementById("setEqual");



    //=および→の縦の位置を揃える。

    let parentIndexes = [];



    //parentが-1であるものを順番に取得する。

    for(let i = 0; i < maxLineIndex + 1; i++) {

        for(let j = 0; j < formula.length; j++) {

            if(formula[j].parent == -1 && formula[j].lineIndex == i) parentIndexes.push(j);

        }

    }



    if(setEqualPos) {

        //縦をそろえないようにformulaを変更する。

        for(let i = 0; i < parentIndexes.length; i++) {

            let formulaJson = formula[parentIndexes[i]];

            let parts = formulaJson.parts;

            for(let j = 0; j < parts.length; j++) {

                if(parts[j].text.substring(0, blankAnd.length) == blankAnd) {

                    parts[j].text = parts[j].text.substring(blankAnd.length);

                    break;

                }

            }

        }



        setEqual.textContent = "=/→を揃える";

    } else {

        //最初に出てくる→または=の位置を合わせる。

        //formulaを直接編集する。

        for(let i = 0; i < parentIndexes.length; i++) {

            let formulaJson = formula[parentIndexes[i]];

            let parts = formulaJson.parts;

            for(let j = 0; j < parts.length; j++) {

                if(parts[j].text == "=" || parts[j].text == "\\rightarrow") {

                    //このとき、=または→である。

                    parts[j].text = blankAnd + parts[j].text;

                    break;

                }

            }

        }



        setEqual.textContent = "左詰めにする";

    }

    setEqualPos = !setEqualPos;

    

    reloadPreview();

}



function inputTrigonometric(id) {

    switch(id) {

        case "sin":

        case "cos":

        case "tan":

        case "arcsin":

        case "arccos":

        case "arctan":

            inputContent("\\" + id + " ");

            break;

        case "sin-1":

            inputContent("\\sin^{-1} ");

            break;

        case "cos-1":

            inputContent("\\cos^{-1} ");

            break;

        case "tan-1":

            inputContent("\\tan^{-1} ");

            break;

    }

}



function inputLogarithmic(id) {

    switch(id) {

        case "log2":

            inputContent("\\log_{2} ");

            break;

        case "log10":

            inputContent("\\log_{10} ");

            break;

        case "loge":

            inputContent("\\log ");

            break;

        case "ln":

            inputContent("\\ln ");

            break;

    }

}



function inputCPH(alphabet) {

    inputContent("{}_{n}\\mathrm{" + alphabet + "}_{r}");

}



function setChangeInputPlaceDisplay() {

    let changeip = document.getElementById("changeInputPlace");

    

    if(isFiniteMoreTwoInput) {

        changeip.style.visibility = "visible";

    } else {

        changeip.style.visibility = "hidden";

    }

}



function setChangeNewLineDisplay() {

    let fIndex = getIndexByFormulaIndex(nowIndex);

    const newLine = document.getElementById("newLine");

    

    if(formula[fIndex].parent == -1) {

        newLine.style.visibility = "visible";

    } else {

        newLine.style.visibility = "hidden";

    }

}



function setChangeSetEqual() {

    let setEqual = document.getElementById("setEqual");



    if(maxLineIndex > 0) {

        setEqual.style.display = "inline";

    } else {

        //もし、イコールを揃える設定なら、非表示になる前に、このボタンを押した判定にする。

        if(setEqualPos) setEqualPosition();

        setEqual.style.display = "none";

    }

}



function changePreviousInputPlace() {

    //まず現在編集しているのはnowIndex番目のformulaである。

    //それゆえ、まずnowIndex番目のformulaのparent番目のformulaについて、

    //そのpartsの最後番目のreferencesの中において、nowIndexでないものを編集すればよい。

    let fIndex = getIndexByFormulaIndex(nowIndex);

    let parent = formula[fIndex].parent;

    let pIndex = getIndexByFormulaIndex(parent);

    let references = formula[pIndex].parts[formula[pIndex].parts.length - 1].references;

    let refIndex = references.indexOf(nowIndex);



    //ここでは、編集する対象のインデックスを、referencesのrefIndex番目の前に存在する要素とする。

    let editRefIndex = refIndex - 1;

    if(editRefIndex == -1) editRefIndex = references.length - 1;

    nowIndex = references[editRefIndex];

    

    resetFdMessage();

}



function changeNextInputPlace() {

    //まず現在編集しているのはnowIndex番目のformulaである。

    //それゆえ、まずnowIndex番目のformulaのparent番目のformulaについて、

    //そのpartsの最後番目のreferencesの中において、nowIndexでないものを編集すればよい。

    let fIndex = getIndexByFormulaIndex(nowIndex);

    let parent = formula[fIndex].parent;

    let pIndex = getIndexByFormulaIndex(parent);

    let references = formula[pIndex].parts[formula[pIndex].parts.length - 1].references;

    let refIndex = references.indexOf(nowIndex);



    //ここでは、編集する対象のインデックスを、referencesのrefIndex番目の次に存在する要素とする。

    let editRefIndex = refIndex + 1;

    if(editRefIndex == references.length) editRefIndex = 0;

    nowIndex = references[editRefIndex];



    resetFdMessage();

}



function startWithBs(text) {

    inputContent("\\" + text + " ");

}



function startWitha(text) {

    inputContent(text);

}



function startWithu(text) {

    inputContent("\\mathrm{" + text + "}");

}



function startWithBb(text) {

    inputContent("\\mathbb{" + text + "}");

}



function addLetter(text) {

    if(isItalic) {

        inputContent(text);

    } else {

        inputContent("\\mathrm{" + text + "}");

    }

}



function arrowUpClicked() {

    if(isMatrix) {

        goUp();

    } else {

        arrowUpLeftClicked();

    }

}



function arrowDownClicked() {

    if(isMatrix) {

        goDown();

    } else {

        arrowDownRightClicked();

    }

}



function arrowLeftClicked() {

    if(isMatrix) {

        goLeft();

    } else {

        arrowUpLeftClicked();

    }

}



function arrowRightClicked() {

    if(isMatrix) {

        goRight();

    } else {

        arrowDownRightClicked();

    }

}



function arrowUpLeftClicked() {

    if(isFiniteMoreTwoInput) {

        changePreviousInputPlace();

    }

}



function arrowDownRightClicked() {

    if(isFiniteMoreTwoInput) {

        changeNextInputPlace();

    }

}

function getFormulaText() {
    //まず、parentが-1であるような数式を全て取得する。
    let parentIndexes = [];
    for(let i = 0; i < maxLineIndex + 1; i++) {
        for(let j = 0; j < formula.length; j++) {
            if(formula[j].parent == -1 && formula[j].lineIndex == i) {
                parentIndexes.push(formula[j].formulaIndex);
            }
        }
    }

    let fIndex = getIndexByFormulaIndex(nowIndex);
    let parent = formula[fIndex].parent;
    let answer = "";
    if(parent == -1) {
        //このとき、そのまま見せればよい。
        if(parentIndexes.length == 1) {
            //もし行が一つだけなら、そのまま表示すればよい。
            answer = getFormula(parentIndexes[0]);

            //もし式番号が存在するなら、それも追加する。
            let pIndex = getIndexByFormulaIndex(parentIndexes[0]);
            if(formula[pIndex].hasOwnProperty('tag') && formula[pIndex].tag != "-1") {
                answer += "\\tag{" + formula[pIndex].tag + "}";
            }
        } else {
            //もし行が複数あるなら、それらをalignに入れればよい。
            answer = "\\begin{align} ";
            for(let i = 0; i < parentIndexes.length; i++) {
                if(!setEqualPos && maxLineIndex > 0) answer += "&";
                answer += getFormula(parentIndexes[i]);

                //もし式番号が存在するなら、それも追加する。
                let pIndex = getIndexByFormulaIndex(parentIndexes[i]);
                if(formula[pIndex].hasOwnProperty('tag') && formula[pIndex].tag != "-1") {
                    answer += "\\tag{" + formula[pIndex].tag + "}";
                }

                if(i == parentIndexes.length - 1) break;
                answer += " \\\\ ";
            }
            answer += " \\end{align}";
        }
    } else {
        //このとき、いったん全て灰色で囲み、getFormulaで必要なところだけ黒色にしてもらえばよい。
        //それ以外は上記と同様に行う。
        if(parentIndexes.length == 1) {
            answer = "\\color{gray}{" + getFormula(parentIndexes[0]) + "}";
        } else {
            answer = "\\color{gray}{\\begin{array}{l} ";
            for(let i = 0; i < parentIndexes.length; i++) {
                answer += getFormula(parentIndexes[i]);
                if(i == parentIndexes.length - 1) break;
                answer += " \\\\ ";
            }
            answer += " \\end{array}}";
        }
    }

    return answer;
}

function reloadPreview() {
    const preview = document.getElementById("fdDisplayPreview");
    preview.textContent = "\\[" + getFormulaText() + "\\]";

    MathJax.typeset();
}



function deleteOneLetter() {

    //すでに文字列が空であるなら、行が2行目以降なら一行下げる。そうでないなら関数を終える。

    let fIndex = getIndexByFormulaIndex(nowIndex);

    if(formula[fIndex].parts.length == 0) {

        //一番上の行なら、式番号を削除する。

        if(formula[fIndex].hasOwnProperty('tag')) formula[fIndex].tag = "-1";

        reloadPreview();



        if(formula[fIndex].lineIndex > 0) {

            formula.splice(fIndex, 1);

            maxLineIndex--;



            //次に、lineIndexがmaxLineIndexであり、parentが-1であるもののformulaIndexを取得する。

            for(let i = 0; i < formula.length; i++) {

                if(formula[i].parent == -1 && formula[i].lineIndex == maxLineIndex) {

                    nowIndex = formula[i].formulaIndex;

                    break;

                }

            }



            setChangeSetEqual();

            reloadPreview();

        }

        return;

    }



    //最後のパーツのcanDeleteがtrueならば、最後のパーツを削除する。

    if(formula[fIndex].parts[formula[fIndex].parts.length - 1].canDelete) formula[fIndex].parts.pop();



    reloadPreview();

}



function allDelete() {

    //このとき、文字列が空なら関数を終える。

    let fIndex = getIndexByFormulaIndex(nowIndex);

    if(formula[fIndex].parts.length == 0) return;



    //canDeleteがtrueであるパーツについて、partsを全削除する。

    for(let i = 0; i < formula[fIndex].parts.length; i++) {

        if(formula[fIndex].parts[i].canDelete) {

            formula[fIndex].parts.splice(i, 1);

            i--;

        }

    }

    

    reloadPreview();

}





function changeItalic() {

    const button = document.getElementById("changeItalic");



    if(isItalic) {

        //このとき、italicであるということである。

        button.textContent = "斜字にする";

    } else {

        button.textContent = "斜字にしない";

    }

    isItalic = !isItalic;

}



function changeDesign(key, isClick) {

    //押されたキーのスタイルを変更する。

    let keyObj;

    switch(key) {

        case '(':

        case ')':

        case '=':

        case '+':

        case '-':

        case '/':

        case '.':

        case ',':

        case '!':

        case "'":

        case '[':

        case ']':

            keyObj = document.getElementById("a_" + key);

            break;

        case 'Backspace':

            keyObj = document.getElementById("backspace");

            break;

        case '{':

            keyObj = document.getElementById("bs_lbrace");

            break;

        case '}':

            keyObj = document.getElementById("bs_rbrace");

            break;

        case 'Enter':

            keyObj = document.getElementById("newLine");

            break;

        case '^':

            keyObj = document.getElementById("sisu");

            break;

        case '_':

            keyObj = document.getElementById("soeji");

            break;

        case ' ':

            keyObj = document.getElementById("makeBlank");

            break;

        case '<':

            keyObj = document.getElementById("bs_lt");

            break;

        case '>':

            keyObj = document.getElementById("bs_gt");

            break;

        case 'ArrowUp':

            if(isMatrix) {

                keyObj = document.getElementById("goUp");

            } else {

                keyObj = document.getElementById("changeInputPlace");

            }

            break;

        case 'ArrowDown':

            if(isMatrix) {

                keyObj = document.getElementById("goDown");

            } else {

                keyObj = document.getElementById("changeInputPlace");

            }

            break;

        case 'ArrowLeft':

            if(isMatrix) {

                keyObj = document.getElementById("goLeft");

            } else {

                keyObj = document.getElementById("changeInputPlace");

            }

            break;

        case 'ArrowRight':

            if(isMatrix) {

                keyObj = document.getElementById("goRight");

            } else {

                keyObj = document.getElementById("changeInputPlace");

            }

            break;

        case '*':

            keyObj = document.getElementById("bs_times");

            break;

    }



    if(isClick) {

        keyObj.style.color = cDefColor;

        keyObj.style.backgroundColor = cDefBackColor;

    } else {

        keyObj.style.color = uDefColor;

        keyObj.style.backgroundColor = uDefBackColor;

    }

}



function changeNumberDesign(key, isClick) {

    const keyObj = document.getElementById("a_" + key);

    if(isClick) {

        keyObj.style.color = cDefColor;

        keyObj.style.backgroundColor = cDefBackColor;

    } else {

        keyObj.style.color = uDefColor;

        keyObj.style.backgroundColor = uDefBackColor;

    }

}



function changeLetterDesign(key, isClick) {

    if(isItalic) {

        const keyObj = document.getElementById("a_" + key);

        if(isClick) {

            keyObj.style.color = cDefColor;

            keyObj.style.backgroundColor = cDefBackColor;

        } else {

            keyObj.style.color = uDefColor;

            keyObj.style.backgroundColor = uDefBackColor;

        }

    } else {

        const keyObj = document.getElementById("u_" + key);

        if(isClick) {

            keyObj.style.color = cDefColor;

            keyObj.style.backgroundColor = cDefBackColor;

        } else {

            keyObj.style.color = uDefColor;

            keyObj.style.backgroundColor = uDefBackColor;

        }

    }

}



function getIndexByFormulaIndex(formulaIndex) {

    for(let i = 0; i < formula.length; i++) {

        if(formula[i].formulaIndex == formulaIndex) return i;

    }

}