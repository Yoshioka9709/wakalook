const susiki = "数式を入力する";

const sisu = "指数の値を入力する";

const soeji = "添字の値を入力する";

const sqrt2 = "平方根の値を入力する";

const sqrt3 = "立方根の値を入力する";

const sqrtn = "n乗根の値を入力する";

const dot = "微分される変数を入力する";

const log = "対数関数の底を入力する";

const vector = "ベクトルの中身を入力する";

const denominator = "分数の分母を入力する";

const numerator = "分数の分子を入力する";

const overline = "オーバーラインの中の値を入力する";

const nC = "nCrのnを入力する";

const rC = "nCrのrを入力する";

const nP = "nPrのnを入力する";

const rP = "nPrのrを入力する";

const nH = "nHrのnを入力する";

const rH = "nHrのrを入力する";

const sum = "総和の下の値を入力する";

const sumd = "総和の下の値を入力する";

const sumu = "総和の上の値を入力する";

const prod = "総乗の下の値を入力する";

const prodd = "総乗の下の値を入力する";

const produ = "総乗の上の値を入力する。";

const n_sqrt = "累乗根のnを入力する";

const f_sqrt = "累乗根の数式を入力する";

const dDenominator = "変化量の分母に当たる部分を入力する";

const dNumerator = "変化量の分子に当たる部分を入力する";

const dPower = "微分の次数を入力する";

const pPower = "偏微分の次数を入力する";

const bFormula = "定積分の数式を入力する";

const bracketd = "定積分の下端を入力する";

const bracketu = "定積分の上端を入力する";

const sFormula = "被積分関数を入力する";

const sVariable = "積分変数を入力する";

const lVariable = "極限を取る変数を入力する";

const lFormula = "極限を求める数式を入力する";

const mMatrix = "行列の要素を入力する";

const mVerVec = "縦ベクトルの要素を入力する";

const divideCase = "場合分けの数式を入力する";

const mAbs = "絶対値の中身を入力する";

const mNorm = "ノルムの中身を入力する";

const mFloor = "床関数の中身を入力する";

const mCeil = "天井関数の中身を入力する";

const mAccent = "アクセントの中身を入力する";



function buttonClicked(id) {

    //ここで、処理を行う。

    if(id.substring(0,2) == "bs") {

        startWithBs(id.substr(3));

    } else if(id.substring(0,2) == "a_") {

        startWitha(id.substr(2));

    } else if(id.substring(0,2) == "u_") {

        startWithu(id.substr(2));

    } else if(id.substring(0,2) == "bb") {

        startWithBb(id.substr(2));

    } else {

        switch(id) {

            case "backspace":

                deleteOneLetter();

                break;

            case "OK":

                doOK();

                break;

            case "cancel":

                doCancel();

                break;

            case "clear":

                allDelete();

                break;

            case "changeItalic":

                changeItalic();

                break;

            case "changeInputPlace":

                changeNextInputPlace();

                break;

            case "makeBlank":

                makeBlank();

                break;

            case "newLine":

                makeNewLine();

                break;

            case "setEqual":

                setEqualPosition();

                break;

            case "tag":

                setFormulaNumber();

                break;

            case "deleteTag":

                deleteFormulaNumber();

                break;

            case "sisu":

            case "soeji":

            case "sqrt2":

            case "sqrt3":

            case "sqrtn":

            case "dot":

            case "ddot":

            case "dddot":

            case "ddddot":

            case "overline":

            case "fracd1":

            case "fracd2":

            case "fracdn":

            case "fracp1":

            case "fracp2":

            case "fracpn":

            case "vector":

            case "abs":

            case "norm":

            case "floor":

            case "ceil":

            case "hat":

            case "grave":

            case "acute":

            case "check":

            case "tilde":

            case "breve":

            case "sum":

            case "prod":

            case "log":

                inputBraceContent(id, 1);

                break;

            case "sqrt":

            case "fraction":

            case "fracdd1":

            case "fracdd2":

            case "fracddn":

            case "fracd":

            case "C":

            case "P":

            case "H":

            case "fracpp1":

            case "fracpp2":

            case "fracppn":

            case "fracp":

            case "limit":

            case "slashFrac":

            case "int1":

            case "oint1":

            case "sumdu":

            case "proddu":

                inputBraceContent(id, 2);

                break;

            case "fracdd":

            case "fracpp":

            case "bracket":

            case "int3":

            case "oint3":

                inputBraceContent(id, 3);

                break;

            case "int2":

            case "oint2":

                inputBraceContent(id, 4);

                break;

            case "sin":

            case "cos":

            case "tan":

            case "arcsin":

            case "arccos":

            case "arctan":

            case "sin-1":

            case "cos-1":

            case "tan-1":

                inputTrigonometric(id);

                break;

            case "log2":

            case "log10":

            case "loge":

            case "ln":

                inputLogarithmic(id);

                break;

            case "nCr":

            case "nPr":

            case "nHr":

                inputCPH(id.substring(1,2));

                break;

            case "pmatrix":

            case "bmatrix":

            case "vmatrix":

            case "Vmatrix":

                inputMatrix(id);

                break;

            case "goUp":

                goUp();

                break;

            case "goDown":

                goDown();

                break;

            case "goLeft":

                goLeft();

                break;

            case "goRight":

                goRight();

                break;

            case "addRow":

                addMatrixRow();

                break;

            case "deleteRow":

                deleteMatrixRow();

                break;

            case "addColumn":

                addMatrixColumn();

                break;

            case "deleteColumn":

                deleteMatrixColumn();

                break;

            case "vecvertical":

                inputVervec();

                break;

            case "divideCase":

                inputDivideCase();

                break;

            case "divideCaseTerm":

                inputDivideCaseTerm();

                break;

        }

    }

}



function inputBraceContent(id, howManyBrace) {

    //新しい数式を追加する。

    let fIndex = getIndexByFormulaIndex(nowIndex);

    formula[fIndex].parts.push({inputMode: id, canDelete: true, text: "", references: []});

    maxIndex++;

    for(let i = 0; i < howManyBrace; i++) {

        formula[fIndex].parts[formula[fIndex].parts.length - 1].references.push(maxIndex + i);

        formula.push({whereIs: id, formulaIndex: maxIndex + i, parent: nowIndex, parts:[]});

        let lastIndex = formula.length - 1;



        //もし複数入力する項目があるidの場合は、ここで別個にwhereIsを登録し直す。

        switch(id) {

            case "fraction":

            case "slashFrac":

                if(i == 0) formula[lastIndex].whereIs = "numerator";

                else formula[lastIndex].whereIs = "denominator";

                break;

            case "C":

                if(i == 0) formula[lastIndex].whereIs = "nC";

                else formula[lastIndex].whereIs = "rC";

                break;

            case "P":

                if(i == 0) formula[lastIndex].whereIs = "nP";

                else formula[lastIndex].whereIs = "rP";

                break;

            case "H":

                if(i == 0) formula[lastIndex].whereIs = "nH";

                else formula[lastIndex].whereIs = "rH";

                break;

            case "sumdu":

                if(i == 0) formula[lastIndex].whereIs = "sumd";

                else formula[lastIndex].whereIs = "sumu";

                break;

            case "proddu":

                if(i == 0) formula[lastIndex].whereIs = "prodd";

                else formula[lastIndex].whereIs = "produ";

                break;

            case "sqrt":

                if(i == 0) formula[lastIndex].whereIs = "n_sqrt";

                else formula[lastIndex].whereIs = "f_sqrt";

                break;

            case "fracdd1":

                if(i == 0) formula[lastIndex].whereIs = "dd1Numerator";

                else formula[lastIndex].whereIs = "dd1Denominator";

                break;

            case "fracdd2":

                if(i == 0) formula[lastIndex].whereIs = "dd2Numerator";

                else formula[lastIndex].whereIs = "dd2Denominator";

                break;

            case "fracddn":

                if(i == 0) formula[lastIndex].whereIs = "ddnNumerator";

                else formula[lastIndex].whereIs = "ddnDenominator";

                break;

            case "fracd":

                if(i == 0) formula[lastIndex].whereIs = "dDenominator";

                else formula[lastIndex].whereIs = "dPower";

                break;

            case "fracdd":

                if(i == 0) formula[lastIndex].whereIs = "ddNumerator";

                else if(i == 1) formula[lastIndex].whereIs = "ddDenominator";

                else formula[lastIndex].whereIs = "ddPower";

                break;

            case "fracpp1":

                if(i == 0) formula[lastIndex].whereIs = "pp1Numerator";

                else formula[lastIndex].whereIs = "pp1Denominator";

                break;

            case "fracpp2":

                if(i == 0) formula[lastIndex].whereIs = "pp2Numerator";

                else formula[lastIndex].whereIs = "pp2Denominator";

                break;

            case "fracppn":

                if(i == 0) formula[lastIndex].whereIs = "ppnNumerator";

                else formula[lastIndex].whereIs = "ppnDenominator";

                break;

            case "fracp":

                if(i == 0) formula[lastIndex].whereIs = "pDenominator";

                else formula[lastIndex].whereIs = "pPower";

                break;

            case "fracpp":

                if(i == 0) formula[lastIndex].whereIs = "ppNumerator";

                else if(i == 1) formula[lastIndex].whereIs = "ppDenominator";

                else formula[lastIndex].whereIs = "ppPower";

                break;

            case "bracket":

                if(i == 0) formula[lastIndex].whereIs = "bFormula";

                else if(i == 1) formula[lastIndex].whereIs = "bracketd";

                else formula[lastIndex].whereIs = "bracketu";

                break;

            case "int1":

                if(i == 0) formula[lastIndex].whereIs = "sFormula";

                else formula[lastIndex].whereIs = "sVariable";

                break;

            case "int2":

                if(i == 0) formula[lastIndex].whereIs = "intd";

                else if(i == 1) formula[lastIndex].whereIs = "intu";

                else if(i == 2) formula[lastIndex].whereIs = "sFormula";

                else formula[lastIndex].whereIs = "sVariable";

                break;

            case "int3":

                if(i == 0) formula[lastIndex].whereIs = "intd";

                else if(i == 1) formula[lastIndex].whereIs = "sFormula";

                else formula[lastIndex].whereIs = "sVariable";

            case "oint1":

                if(i == 0) formula[lastIndex].whereIs = "sFormula";

                else formula[lastIndex].whereIs = "sVariable";

                break;

            case "oint2":

                if(i == 0) formula[lastIndex].whereIs = "intd";

                else if(i == 1) formula[lastIndex].whereIs = "intu";

                else if(i == 2) formula[lastIndex].whereIs = "sFormula";

                else formula[lastIndex].whereIs = "sVariable";

                break;

            case "oint3":

                if(i == 0) formula[lastIndex].whereIs = "intd";

                else if(i == 1) formula[lastIndex].whereIs = "sFormula";

                else formula[lastIndex].whereIs = "sVariable";

            case "limit":

                if(i == 0) formula[lastIndex].whereIs = "lVariable";

                else formula[lastIndex].whereIs = "lFormula";

                break;

        }

    }



    //nowIndexを変更する。

    nowIndex = maxIndex;



    //maxIndexを更新する。

    maxIndex += howManyBrace - 1;



    //fdMessageを設定する。

    setFdMessage(id);

}



function setFdMessage() {

    const fdMessage = document.getElementById("fdMessage");

    let fIndex = getIndexByFormulaIndex(nowIndex);

    switch(formula[fIndex].whereIs) {

        case "sisu":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = sisu;

            break;

        case "soeji":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = soeji;

            break;

        case "sqrt2":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = sqrt2;

            break;

        case "sqrt3":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = sqrt3;

            break;

        case "sqrtn":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = sqrtn;

            break;

        case "log":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = log;

            break;

        case "dot":

        case "ddot":

        case "dddot":

        case "ddddot":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = dot;

            break;

        case "vector":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = vector;

            break;

        case "overline":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = overline;

            break;

        case "numerator":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = numerator;

            break;

        case "denominator":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = denominator;

            break;

        case "nC":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = nC;

            break;

        case "rC":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = rC;

            break;

        case "nP":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = nP;

            break;

        case "rP":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = rP;

            break;

        case "nH":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = nH;

            break;

        case "rH":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = rH;

            break;

        case "sum":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = sum;

            break;

        case "sumd":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = sumd;

            break;

        case "sumu":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = sumu;

            break;

        case "prod":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = prod;

            break;

        case "prodd":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = prodd;

            break;

        case "produ":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = produ;

            break;

        case "n_sqrt":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = n_sqrt;

            break;

        case "f_sqrt":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = f_sqrt;

            break;

        case "dd1Numerator":

        case "dd2Numerator":

        case "ddnNumerator":

        case "ddNumerator":

        case "pp1Numerator":

        case "pp2Numerator":

        case "ppnNumerator":

        case "ppNumerator":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = dNumerator;

            break;

        case "dd1Denominator":

        case "dd2Denominator":

        case "ddnDenominator":

        case "dDenominator":

        case "ddDenominator":

        case "pp1Denominator":

        case "pp2Denominator":

        case "ppnDenominator":

        case "pDenominator":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = dDenominator;

            break;

        case "dPower":

        case "ddPower":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = dPower;

            break;

        case "pPower":

        case "ppPower":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = pPower;

            break;

        case "fracd1":

        case "fracd2":

        case "fracdn":

        case "fracp1":

        case "fracp2":

        case "fracpn":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = dNumerator;

            break;

        case "bFormula":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = bFormula;

            break;

        case "bracketu":

        case "intu":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = bracketu;

            break;

        case "bracketd":

        case "intd":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = bracketd;

            break;

        case "sFormula":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = sFormula;

            break;

        case "sVariable":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = sVariable;

            break;

        case "lFormula":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = lFormula;

            break;

        case "lVariable":

            isFiniteMoreTwoInput = true;

            isMatrix = false;

            fdMessage.textContent = lVariable;

            break;

        case "pmatrix":

        case "bmatrix":

        case "vmatrix":

        case "Vmatrix":

            isFiniteMoreTwoInput = false;

            isMatrix = true;

            isOneColumn = false;

            isThereTerm = false;

            fdMessage.textContent = mMatrix;

            break;

        case "verVec":

            isFiniteMoreTwoInput = false;

            isMatrix = true;

            isOneColumn = true;

            fdMessage.textContent = mVerVec;

            break;

        case "divideCase":

            isFiniteMoreTwoInput = false;

            isMatrix = true;

            isOneColumn = true;

            fdMessage.textContent = divideCase;

            break;

        case "divideCaseTerm":

            isFiniteMoreTwoInput = false;

            isMatrix = true;

            isOneColumn = false;

            isThereTerm = true;

            fdMessage.textContent = divideCase;

            break;

        case "abs":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = mAbs;

            break;

        case "norm":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = mNorm;

            break;

        case "floor":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = mFloor;

            break;

        case "ceil":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = mCeil;

            break;

        case "hat":

        case "grave":

        case "acute":

        case "check":

        case "tilde":

        case "breve":

            isFiniteMoreTwoInput = false;

            isMatrix = false;

            fdMessage.textContent = mAccent;

            break;

    }

    setChangeInputPlaceDisplay();

    setChangeMatrixOptionDisplay();

    setChangeNewLineDisplay();



    reloadPreview();

}



function getFormula(index) {

    //これは、formulaIndexがindexである数式を返すといった関数である。



    //まず、formulaIndexがindexと一致するものを探し出す。

    let formulaJson = null;

    for(let i = 0; i < formula.length; i++) {

        if(formula[i].formulaIndex == index) {

            formulaJson = formula[i];

            break;

        }

    }

    if(formulaJson == null) return null; //もし見つからなければ、nullを返す。



    //次は、このformulaJsonで表される数式を取得する。

    let answer = "";

    

    for(let i = 0; i < formulaJson.parts.length; i++) {

        //references[0]の値を事前に取得しておく。

        let refIndex = formulaJson.parts[i].references[0];

        let refIndex1 = formulaJson.parts[i].references[1];

        let refIndex2 = formulaJson.parts[i].references[2];

        let refIndex3 = formulaJson.parts[i].references[3];



        switch(formulaJson.parts[i].inputMode) {

            case "susiki":

                //数式なら、そのままtextをanswerに結合すればよい。

                answer += formulaJson.parts[i].text;

                break;

            case "sisu":

                //指数なら、^{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                //もし^{}の前に何も入力されていないなら、{}を前に補う。

                if(answer == "") answer = "{}";

                answer += "^{" + getFormula(refIndex) + "}";

                break;

            case "soeji":

                //添字なら、_{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                //もし_{}の前に何も入力されていないなら、{}を前に補う。

                if(answer == "") answer = "{}";

                answer += "_{" + getFormula(refIndex) + "}";

                break;

            case "sqrt2":

                //平方根なら、\\sqrt{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\sqrt{" + getFormula(refIndex) + "}";

                break;

            case "sqrt3":

                //立方根なら、\\sqrt[3]{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\sqrt[3]{" + getFormula(refIndex) + "}";

                break;

            case "sqrtn":

                //n乗根なら、\\sqrt[n]{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\sqrt[n]{" + getFormula(refIndex) + "}";

                break;

            case "log":

                //対数関数logなら、\\log_{ }を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\log_{" + getFormula(refIndex) + "}";

                break;

            case "dot":

                //ここでは、\\dot{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\dot{" + getFormula(refIndex) + "}";

                break;

            case "ddot":

                //ここでは、\\ddot{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\ddot{" + getFormula(refIndex) + "}";

                break;

            case "dddot":

                //ここでは、\\dddot{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\dddot{" + getFormula(refIndex) + "}";

                break;

            case "ddddot":

                //ここでは、\\ddddot{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\ddddot{" + getFormula(refIndex) + "}";

                break;

            case "vector":

                //ここでは、\\vec{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\vec{" + getFormula(refIndex) + "}";

                break;

            case "overline":

                //ここでは、\\overline{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\overline{" + getFormula(refIndex) + "}";

                break;

            case "fraction":

                //ここでは、\\frac{}{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{" + getFormula(refIndex) + "}{" + getFormula(refIndex1) + "}";

                break;

            case "C":

                //ここでは、\\{}_{}\\mathrm{C}_{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "{}_{" + getFormula(refIndex) + "}\\mathrm{C}_{" + getFormula(refIndex1) + "}";

                break;

            case "P":

                //ここでは、\\{}_{}\\mathrm{P}_{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "{}_{" + getFormula(refIndex) + "}\\mathrm{P}_{" + getFormula(refIndex1) + "}";

                break;

            case "H":

                //ここでは、\\{}_{}\\mathrm{H}_{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "{}_{" + getFormula(refIndex) + "}\\mathrm{H}_{" + getFormula(refIndex1) + "}";

                break;

            case "sum":

                //ここでは、\\sum_{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\sum_{" + getFormula(refIndex) + "}";

                break;

            case "sumdu":

                //ここでは、\\sum_{}^{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\sum_{" + getFormula(refIndex) + "}^{" + getFormula(refIndex1) + "}";

                break;

            case "prod":

                //ここでは、\\prod_{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\prod_{" + getFormula(refIndex) + "}";

                break;

            case "proddu":

                //ここでは、\\prod_{}^{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\prod_{" + getFormula(refIndex) + "}^{" + getFormula(refIndex1) + "}";

                break;

            case "sqrt":

                //ここでは、\\sqrt[]{}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\sqrt[" + getFormula(refIndex) + "]{" + getFormula(refIndex1) + "}";

                break;

            case "fracdd1":

                //ここでは、\\frac{d }{d }を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{d" + getFormula(refIndex) + "}{d" + getFormula(refIndex1) + "}";

                break;

            case "fracdd2":

                //ここでは、\\frac{d^{2} }{d ^{2}}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{d^{2}" + getFormula(refIndex) + "}{d" + getFormula(refIndex1) + "^{2}}";

                break;

            case "fracddn":

                //ここでは、\\frac{d^{n} }{d ^{n}}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{d^{n}" + getFormula(refIndex) + "}{d" + getFormula(refIndex1) + "^{n}}";

                break;

            case "fracd1":

                //ここでは、\\frac{d}{d }を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{d}{d" + getFormula(refIndex) + "}";

                break;

            case "fracd2":

                //ここでは、\\frac{d^{2}}{d ^{2}}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{d^{2}}{d" + getFormula(refIndex) + "^{2}}";

                break;

            case "fracdn":

                //ここでは、\\frac{d^{n}}{d ^{n}}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{d^{n}}{d" + getFormula(refIndex) + "^{n}}";

                break;

            case "fracd":

                //ここでは、\\frac{d^{ }}{d ^{ }}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                if(nowIndex == index && nowIndex != 0) answer += "\\frac{d^{" + getFormula(refIndex1) + "}}{d" + getFormula(refIndex) + "^{\\color{gray}{" + getFormula(refIndex1) + "}}}";

                else answer += "\\frac{d^{" + getFormula(refIndex1) + "}}{d" + getFormula(refIndex) + "^{" + getFormula(refIndex1) + "}}";

                break;

            case "fracdd":

                //ここでは、\\frac{d^{ } }{d ^{ }}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                if(nowIndex == index && nowIndex != 0) answer += "\\frac{d^{" + getFormula(refIndex2) + "}" + getFormula(refIndex) + "}{d" + getFormula(refIndex1) + "^{\\color{gray}{" + getFormula(refIndex2) + "}}}";

                else answer += "\\frac{d^{" + getFormula(refIndex2) + "}" + getFormula(refIndex) + "}{d" + getFormula(refIndex1) + "^{" + getFormula(refIndex2) + "}}";

                break;

            case "fracpp1":

                //ここでは、\\frac{\\partial }{\\partial }を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{\\partial " + getFormula(refIndex) + "}{\\partial " + getFormula(refIndex1) + "}";

                break;

            case "fracpp2":

                //ここでは、\\frac{\\partial^{2} }{\\partial ^{2}}を補えばよい。

                answer += "\\frac{\\partial^{2} " + getFormula(refIndex) + "}{\\partial " + getFormula(refIndex1) + "^{2}}";

                break;

            case "fracppn":

                //ここでは、\\frac{\\partial^{n} }{\\partial ^{n}}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{\\partial^{n} " + getFormula(refIndex) + "}{\\partial " + getFormula(refIndex1) + "^{n}}";

                break;

            case "fracp1":

                //ここでは、\\frac{\\partial}{\\partial }を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{\\partial}{\\partial " + getFormula(refIndex) + "}";

                break;

            case "fracp2":

                //ここでは、\\frac{\\partial^{2}}{\\partial ^{2}}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{\\partial^{2}}{\\partial " + getFormula(refIndex) + "^{2}}";

                break;

            case "fracpn":

                //ここでは、\\frac{\\partial^{n}}{\\partial ^{n}}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{\\partial^{n}}{\\partial " + getFormula(refIndex) + "^{n}}";

                break;

            case "fracp":

                //ここでは、\\frac{\\partial^{ }}{\\partial ^{ }}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{\\partial^{" + getFormula(refIndex1) + "}}{\\partial " + getFormula(refIndex) + "^{" + getFormula(refIndex1) + "}}";

                break;

            case "fracpp":

                //ここでは、\\frac{\\partial^{ } }{\\partial ^{ }}を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\frac{\\partial^{" + getFormula(refIndex2) + "}" + getFormula(refIndex) + "}{\\partial " + getFormula(refIndex1) + "^{" + getFormula(refIndex2) + "}}";

                break;

            case "bracket":

                //ここでは、\\left[  \\right]_{ }^{ }を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\left[ " + getFormula(refIndex) + " \\right]_{" + getFormula(refIndex1) + "}^{" + getFormula(refIndex2) + "}";

                break;

            case "int1":

                //ここでは、\\int  d を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\int " + getFormula(refIndex) + " d " + getFormula(refIndex1);

                break;

            case "int2":

                //ここでは、\\int_{ }^{ }  d を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\int_{" + getFormula(refIndex) + "}^{" + getFormula(refIndex1) + "} " + getFormula(refIndex2) + " d " + getFormula(refIndex3);

                break;

            case "int3":

                //ここでは、\\int_{ } d を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\int_{" + getFormula(refIndex) + "} " + getFormula(refIndex1) + " d " + getFormula(refIndex2);

                break;

            case "oint1":

                //ここでは、\\oint d を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\oint " + getFormula(refIndex) + " d " + getFormula(refIndex1);

                break;

            case "oint2":

                //ここでは、\\oint_{ }^{ } d を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\oint_{" + getFormula(refIndex) + "}^{" + getFormula(refIndex1) + "} " + getFormula(refIndex2) + " d " + getFormula(refIndex3);

                break;

            case "oint3":

                //ここでは、\\oint_{ } d を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\oint_{" + getFormula(refIndex) + "} " + getFormula(refIndex1) + " d " + getFormula(refIndex2);

                break;

            case "limit":

                //ここでは、\\lim_{ } を補えばよい。中身はまたgetFormulaで再帰的に取得する。

                answer += "\\lim_{" + getFormula(refIndex) + "} " + getFormula(refIndex1);

                break;

            case "pmatrix":

                //ここでは、getFormedPmatrix()を用いる。

                answer += getFormedPmatrix(formulaJson, i);

                break;

            case "bmatrix":

                //ここでは、getFormedBmatrix()を用いる。

                answer += getFormedBmatrix(formulaJson, i);

                break;

            case "vmatrix":

                //ここでは、getFormedVmatrix()を用いる。

                answer += getFormedVmatrix(formulaJson, i);

                break;

            case "Vmatrix":

                //ここでは、getFormedVmatrix2()を用いる。

                answer += getFormedVmatrix2(formulaJson, i);

                break;

            case "verVec":

                //ここでは、getFormedVervec()を用いる。

                answer += getFormedVervec(formulaJson, i);

                break;

            case "divideCase":

                //ここでは、getFormedDivideCase()を用いる。

                answer += getFormedDivideCase(formulaJson, i);

                break;

            case "divideCaseTerm":

                //ここでは、getFormedDivideCaseTerm()を用いる。

                answer += getFormedDivideCaseTerm(formulaJson, i);

                break;

            case "slashFrac":

                //ここでは、/を用いる。

                answer += getFormula(refIndex) + " / " + getFormula(refIndex1);

                break;

            case "abs":

                //ここでは、\left|  \right|を補う。

                answer += "\\left| " + getFormula(refIndex) + " \\right|";

                break;

            case "floor":

                //ここでは、\lfloor  \rfloorを補う。

                answer += "\\lfloor " + getFormula(refIndex) + " \\rfloor";

                break;

            case "ceil":

                //ここでは、\lceil  \rceilを補う。

                answer += "\\lceil " + getFormula(refIndex) + " \\rceil";

                break;

            case "norm":

                //ここでは、\|  \|を補う。

                answer += "\\| " + getFormula(refIndex) + " \\|";

                break;

            case "hat":

                //ここでは、\hat{ }を補う。

                answer += "\\hat{" + getFormula(refIndex) + "}";

                break;

            case "grave":

                //ここでは、\grave{ }を補う。

                answer += "\\grave{" + getFormula(refIndex) + "}";

                break;

            case "acute":

                //ここでは、\acute{ }を補う。

                answer += "\\acute{" + getFormula(refIndex) + "}";

                break;

            case "check":

                //ここでは、\check{ }を補う。

                answer += "\\check{" + getFormula(refIndex) + "}";

                break;

            case "tilde":

                //ここでは、\tilde{ }を補う。

                answer += "\\tilde{" + getFormula(refIndex) + "}";

                break;

            case "breve":

                //ここでは、\breve{ }を補う。

                answer += "\\breve{" + getFormula(refIndex) + "}";

                break;

        }

    }



    if(answer == "" && nowIndex != 0) answer = "\\Box" //もしanswerが空文字列で、かつnowIndexが0でないなら、\\Boxを補う。



    let fIndex = getIndexByFormulaIndex(nowIndex);

    if(formula[fIndex].parent != -1 && nowIndex == index) answer = "{\\color{black}{" + answer + "}}"; //もし編集中のインデックスがindexと一致しているなら、これを黒色にする。

    return answer;

}



window.addEventListener("keydown", (e)=>{

    if(!isEditFormulaNumberDialog) {

        const key = e.key;

        const code = e.code;



        if(e.ctrlKey || e.metaKey) {

            if(e.altKey) {

                //もしctrl+altと押されているなら……

                switch(key) {

                    case 'f':

                        //分数入力

                        buttonClicked("fraction");

                        break;

                    case 'l':

                        //ライプニッツの微分記法

                        buttonClicked("fracdd");

                        break;

                    case 's':

                        //平方根

                        buttonClicked("sqrt2");

                        break;

                    case 'v':

                        //ベクトル

                        buttonClicked("vector");

                        break;

                    case 'i':

                        //不定積分

                        buttonClicked("int1");

                        break;

                    case 'd':

                        //定積分

                        buttonClicked("int2");

                        break;

                    case 'm':

                        //行列

                        inputMatrix("pmatrix");

                        break;

                    case 'u':

                        //総和

                        buttonClicked("sumdu");

                        break;

                    case 'c':

                        //nCr

                        buttonClicked("C");

                        break;

                    case 'a':

                        //絶対値

                        buttonClicked("abs");

                        break;

                }

            } else {

                switch(key) {

                    case 'Enter':

                        doOK();

                        break;

                }

            }

        } else if(e.shiftKey) {

            //このとき、shiftを押されたことになる。

            if(code.substring(0,3) == "Key") {

                changeLetterDesign(key, true);

                addLetter(key);

            } else {

                switch(key) {

                    case '(':

                    case ')':

                    case '=':

                    case '+':

                    case '!':

                    case "'":

                        changeDesign(key, true);

                        startWitha(key);

                        break;

                    case '{':

                        changeDesign(key, true);

                        startWithBs("lbrace");

                        break;

                    case '}':

                        changeDesign(key, true);

                        startWithBs("rbrace");

                        break;

                    case '_':

                        changeDesign(key, true);

                        buttonClicked("soeji");

                        break;

                    case '<':

                        changeDesign(key, true);

                        startWithBs("lt");

                        break;

                    case '>':

                        changeDesign(key, true);

                        startWithBs("gt");

                        break;

                    case '*':

                        changeDesign(key, true);

                        startWithBs("times");

                        break;

                }

            }

        } else {

            if(code.substring(0,5) == "Digit") {

                if(e.altKey) return;

                changeNumberDesign(key, true);

                startWitha(key);

            } else if(code.substring(0,3) == "Key") {

                changeLetterDesign(key, true);

                addLetter(key);

            } else {

                switch(key) {

                    case '[':

                    case ']':

                    case '+':

                    case '=':

                    case '/':

                    case '.':

                    case ',':

                        changeDesign(key, true);

                        startWitha(key);

                        break;

                    case '-':

                        if(e.altKey) return;

                        changeDesign(key, true);

                        startWitha(key);

                        break;

                    case 'Backspace':

                        changeDesign(key, true);

                        deleteOneLetter();

                        break;

                    case '^':

                        changeDesign(key, true);

                        buttonClicked("sisu");

                        break;

                    case 'Enter':

                        const newLine = document.getElementById("newLine");

                        if(newLine.style.visibility == "visible") {

                            changeDesign(key, true);

                            makeNewLine();

                        }

                        break;

                    case ' ':

                        changeDesign(key, true);

                        makeBlank();

                        break;

                    case 'ArrowUp':

                        changeDesign(key, true);

                        arrowUpClicked();

                        break;

                    case 'ArrowLeft':

                        changeDesign(key, true);

                        arrowLeftClicked();

                        break;

                    case 'ArrowDown':

                        changeDesign(key, true);

                        arrowDownClicked();

                        break;

                    case 'ArrowRight':

                        changeDesign(key, true);

                        arrowRightClicked();

                        break;

                    case '*':

                        changeDesign(key, true);

                        startWithBs("times");

                        break;

                    case '1':

                    case '2':

                    case '3':

                    case '4':

                    case '5':

                    case '6':

                    case '7':

                    case '8':

                    case '9':

                    case '0':

                        //テンキー対応

                        if(e.altKey) return;

                        changeNumberDesign(key, true);

                        startWitha(key);

                        break;

                }

            }

        }

    }

});



window.addEventListener("keyup", (e)=>{

    if(!isEditFormulaNumberDialog) {

        const key = e.key;

        const code = e.code;



        if(e.shiftKey) {

            //このとき、shiftキーが離されたことになる。

            if(code.substring(0,3) == "Key") {

                changeLetterDesign(key, false);

            } else {

                switch(key) {

                    case '(':

                    case ')':

                    case '{':

                    case '}':

                    case '=':

                    case '+':

                    case '_':

                    case '!':

                    case "'":

                    case "<":

                    case ">":

                    case "*":

                        changeDesign(key, false);

                        break;

                }

            }

        } else {

            if(code.substring(0,5) == "Digit") {

                changeNumberDesign(key, false);

            } else if(code.substring(0,3) == "Key") {

                changeLetterDesign(key, false);

            } else {

                switch(key) {

                    case '[':

                    case ']':

                    case '+':

                    case '-':

                    case '=':

                    case '/':

                    case '.':

                    case ',':

                    case '^':

                    case 'Backspace':

                    case 'Enter':

                    case ' ':

                    case '*':

                    case 'ArrowUp':

                    case 'ArrowDown':

                    case 'ArrowLeft':

                    case 'ArrowRight':

                        changeDesign(key, false);

                        break;

                    case '1':

                    case '2':

                    case '3':

                    case '4':

                    case '5':

                    case '6':

                    case '7':

                    case '8':

                    case '9':

                    case '0':

                        //テンキー対応

                        if(e.altKey) return;

                        changeNumberDesign(key, false);

                        break;

                }

            }

        }

    }

});