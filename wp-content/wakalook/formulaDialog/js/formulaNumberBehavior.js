function setFormulaNumber() {
    //式番号を設定するために、ダイアログを取得する。
    const fnDialog = document.getElementById("formulaNumberDialog");

    //ダイアログの初期値を設定する。
    setFndInputValue();

    //式番号を設定するために、ダイアログを開く。
    isEditFormulaNumberDialog = true;
    fnDialog.showModal();
}

function deleteFormulaNumber() {
    //式番号を削除する。
    let fIndex = getIndexByFormulaIndex(nowIndex);

    while(formula[fIndex].parent != -1) {
        fIndex = getIndexByFormulaIndex(formula[fIndex].parent);
    }

    formula[fIndex].tag = "-1";

    reloadPreview();
}

function fnButtonClicked(id) {
    const fnDialog = document.getElementById("formulaNumberDialog");


    //ボタンが押されたとき
    if(id == "fnOK") {
        //idがfnOKのとき
        //もしfndInputInfoが表示されているなら、alertを表示し、OKをリセットする。
        const fndInputInfo = document.getElementById("fndInputInfo");
        if(fndInputInfo.style.visibility == "visible") {
            alert("0~9または.のみを入力してください。");
            return;
        }
        
        const fndInput = document.getElementById("fndInput");
        let inputNum = fndInput.value;

        //全角数字を全て半角に変換する。
        inputNum = inputNum.replace(/[０-９]/g, function(s) {
            return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
        });

        //式番号として追加する。
        let fIndex = getIndexByFormulaIndex(nowIndex);
        while(formula[fIndex].parent != -1) {
            fIndex = getIndexByFormulaIndex(formula[fIndex].parent);
        }
        formula[fIndex].tag = inputNum;        

        reloadPreview();
    }
    fnDialog.close();
    isEditFormulaNumberDialog = false;
}

function fnRadioChange() {
    const fnRadios = document.getElementsByName("fn_item");

    isTherePeriod = fnRadios[0].checked;
    setFndInputValue();
}

const fndInput = document.getElementById("fndInput");

fndInput.addEventListener("input", fnInputChange);

function fnInputChange() {
    const fndInputInfo = document.getElementById("fndInputInfo");
    let inputNum = fndInput.value;

    let displayInfo = false;
    for(let i = 0; i < inputNum.length; i++) {
        if(displayInfo) break;
        switch(inputNum.substring(i, i + 1)) {
            case "0":
            case "1":
            case "2":
            case "3":
            case "4":
            case "5":
            case "6":
            case "7":
            case "8":
            case "9":
            case ".":
            case "０":
            case "１":
            case "２":
            case "３":
            case "４":
            case "５":
            case "６":
            case "７":
            case "８":
            case "９":
            case "．":
                break;
            default:
                displayInfo = true;
                break;
        }
    }

    if(displayInfo) {
        fndInputInfo.style.visibility = "visible";
    } else {
        fndInputInfo.style.visibility = "hidden";
    }
}

function setFndInputValue() {
    //ここでは4通りの場合がある。それに応じて初期値を決める。
    //1. isTherePeriodがtrueで、「式番号にピリオドを含む」を選択している場合→そのまま
    //2. isTherePeriodがtrueで、「式番号にピリオドを含まない」を選択している場合→含まない場合の初期値を設定する。
    //3. isTherePeriodがfalseで、「式番号にピリオドを含む」を選択している場合→含む場合の初期値を設定する。
    //4. isTherePeriodがfalseで、「式番号にピリオドを含まない」を選択している場合→そのまま
    
    //まずダイアログの結果を調べる。
    const yesPeriod = document.getElementById("yesPeriod");
    let dialogResult = yesPeriod.checked;

    const fndInput = document.getElementById("fndInput");
    let pIndex = getIndexByFormulaIndex(nowIndex);
    while(formula[pIndex].parent != -1) {
        pIndex = getIndexByFormulaIndex(formula[pIndex].parent);
    }


    //ここでは、isTherePeriodとdialogResultの排他的論理和を取る。
    //この結果がtrueであるなら、そのまま初期値を表示すればよい。
    //この結果がfalseであるなら、新しい初期値を設定すればよい。
    if(isTherePeriod ^ dialogResult) {
        //そのまま初期値を表示する。
        //この場合でも、tagが無いか、-1なら従来通りの初期値を設定する。
        if(formula[pIndex].hasOwnProperty('tag') && formula[pIndex].tag != "-1") {
            fndInput.value = formula[pIndex].tag;
            return;
        }
    }

    //isTherePeriod(またはdialogResult)の値により、表示を変える。
    let maxFormulaNumber = findMaxFormulaNumber();
    let maxSubFormulaNumber = findMaxSubFormulaNumber(maxFormulaNumber);

    if(isTherePeriod) {
        if(maxFormulaNumber == 0) fndInput.value = "1." + (maxSubFormulaNumber + 1).toString();
        else fndInput.value = maxFormulaNumber.toString() + "." + (maxSubFormulaNumber + 1).toString();
    } else {
        fndInput.value = (maxFormulaNumber + 1).toString();
    }
}

function findMaxFormulaNumber() {
    //最大の式番号を返す。

    let answer = 0;
    for(let i = 0; i < formula.length; i++) {
        if(formula[i].parent == -1) {
            //このとき、tagがついているか調べる。
            if(formula[i].hasOwnProperty('tag')) {
                let tag = formula[i].tag;
                if(tag.indexOf('.') != -1) {
                    //このとき、tagに.が含まれるので、tagの.の左の数字を切り出す。
                    tag = tag.split('.')[0];
                } //そうでない場合は、tagには数字（しかも半角）しか含まれないので、そのままNumberに突っ込んでよい。
                let tagNum = Number(tag);
                if(tagNum > answer) answer = tagNum;
            }
        }
    }

    return answer;
}

function findMaxSubFormulaNumber(formulaNumber) {
    //ピリオドがあるとき、formulaNumberのもとで、ピリオドの後の数字のうち最大のものを返す。

    let answer = 0;
    for(let i = 0; i < formula.length; i++) {
        if(formula[i].parent == -1) {
            //このとき、tagがついており、かつ.が含まれるか調べる。
            if(formula[i].hasOwnProperty('tag') && formula[i].tag.indexOf('.') != -1) {
                //tagの.の右の数字を切り出す。
                let tagArray = formula[i].tag.split('.');
                if(tagArray[0] == formulaNumber) {
                    //もし調べているformulaNumberなら続行する。
                    let tag = tagArray[1];
                    let tagNum = Number(tag);
                    if(tagNum > answer) answer = tagNum;
                }
            }
        }
    }

    return answer;
}