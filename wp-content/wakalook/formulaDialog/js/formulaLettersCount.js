function getFormulaLettersCount() {

    //まず、イコールの位置を揃えているか否かで変わってくる。

    //イコールの位置をそろえている場合、イコールの左側の数式の最大の長さと、イコールの右側の数式の最大の長さの和を返す必要があり、

    //イコールの位置を揃えていない場合は、数式の長さが最大である行の数式の長さを返せばよい。



    //まず、parentが-1であるようなもののformulaIndexを取得し、それをリストに登録する。

    let parentIndexes = [];

    for (let i = 0; i < formula.length; i++) {

        if (formula[i].parent == -1) parentIndexes.push(formula[i].formulaIndex);

    }



    //文字数を各々カウントする。

    if (setEqualPos) {

        //こちらはイコールの位置を揃えている方

        let maxLeftLength = 0;

        let maxRightLength = 0;

        let maxExceptLength = 0; //イコールや右矢印が存在しない行における場合の長さの最大値



        for (let i = 0; i < parentIndexes.length; i++) {

            //まず右側に存在する数式の長さを取得する。

            //ここで0ならば、イコールまたは右矢印は存在しないので、maxExceptLengthに通常の場合の数式の長さを代入する。

            //0でないなら、maxRightLengthに代入しつつ、maxLeftLengthに代入する値を計算していく。

            let rightLength = getFormulaLettersCountOnIndex(parentIndexes[i], 2);

            if (rightLength == 0) {

                let exceptLength = getFormulaLettersCountOnIndex(parentIndexes[i], 0); //通常バージョンの長さを求め、代入する。

                if (exceptLength > maxExceptLength) maxExceptLength = exceptLength;

            } else {

                if (rightLength > maxRightLength) maxRightLength = rightLength;

                let leftLength = getFormulaLettersCountOnIndex(parentIndexes[i], 1);

                if (leftLength > maxLeftLength) maxLeftLength = leftLength;

            }

        }

        return maxExceptLength + maxLeftLength + 1 + maxRightLength;

    } else {

        //こちらはイコールの位置を揃えていない方

        let maxLength = 0;

        for (let i = 0; i < parentIndexes.length; i++) {

            let letterCount = getFormulaLettersCountOnIndex(parentIndexes[i], 0);

            if (letterCount > maxLength) maxLength = letterCount;

        }



        return maxLength;

    }

}



//modeは以下のような意味がある。

//0…ノーマルなバージョン。この数式の長さをそのまま返す。

//1…イコールまたは右矢印の左側に存在する数式の長さを返す。存在しない場合は0が返り値となる。

//2…イコールまたは右矢印の右側に存在する数式の長さを返す。存在しない場合は0が返り値となる。

function getFormulaLettersCountOnIndex(index, mode) {

    //これは、formulaIndexがindexである数式の長さを返すといった関数である。



    //まず、formulaIndexがindexと一致するものを捜し出す。

    let formulaJson = null;

    for (let i = 0; i < formula.length; i++) {

        if (formula[i].formulaIndex == index) {

            formulaJson = formula[i];

            break;

        }

    }

    if (formulaJson == null) return null; //もし見つからなければ、nullを返す。



    //次は、このformulaJsonで表される数式の長さを取得する。

    let answer = 0;

    let thereWasEqual = false;



    for (let i = 0; i < formulaJson.parts.length; i++) {

        let partText = formulaJson.parts[i].text;

        if (partText.indexOf("=") != -1 || partText.indexOf("\\rightarrow") != -1) {

            if (mode == 1) return answer;



            thereWasEqual = true;

        }



        if (!thereWasEqual && mode == 2) continue; //右側の長さを取得する場合は、イコールまたは右矢印が出てくるまでcontinueを用いる。



        //references[0]の値を事前に取得しておく。

        let refIndex = formulaJson.parts[i].references[0];

        let refIndex1 = formulaJson.parts[i].references[1];

        let refIndex2 = formulaJson.parts[i].references[2];

        let refIndex3 = formulaJson.parts[i].references[3];



        switch (formulaJson.parts[i].inputMode) {

            case "susiki":

                //数式なら、1を追加すればよい。

                //そもそもparts自体「一字消す」ときに一度に消えるものを示しているので、長さは大抵1である。

                answer++;

                break;

            case "sisu":

            case "soeji":

                //指数または添字なら、0.5倍の長さを足す。

                answer += 0.5 * getFormulaLettersCountOnIndex(refIndex, 0);

                break;

            case "sqrt2":

            case "sqrt3":

            case "sqrtn":

            case "bracket":

                //中身の長さに1を足した数にする。

                answer += 1 + getFormulaLettersCountOnIndex(refIndex, 0);

                break;

            case "dot":

            case "ddot":

            case "dddot":

            case "ddddot":

            case "vector":

            case "overline":

            case "hat":

            case "grave":

            case "acute":

            case "check":

            case "tilde":

            case "breve":

                //この時は、中身の長さをそのまま追加する。

                answer += getFormulaLettersCountOnIndex(refIndex, 0);

                break;

            case "fracdd1":

            case "fracdd2":

            case "fracddn":

            case "fracdd":

            case "fracpp1":

            case "fracpp2":

            case "fracppn":

            case "fracpp":

                //ここでは、dの分である1だけ足す。

                answer += 1;

                //そのため、ここではfractionに直接繋がるから、breakを入れない。

            case "fraction":

                //このとき、選択肢により、大きい方を追加すればよい。

                let lenFrac0 = getFormulaLettersCountOnIndex(refIndex, 0);

                let lenFrac1 = getFormulaLettersCountOnIndex(refIndex1, 0);

                if (lenFrac0 > lenFrac1) answer += lenFrac0;

                else answer += lenFrac1;

                break;

            case "C":

            case "P":

            case "H":

                //このとき、nとrの部分についてそれぞれ0.5倍の長さおよび、C, P, Hで1を足した数を返せばよい。

                answer += 0.5 * (getFormulaLettersCountOnIndex(refIndex, 0) + getFormulaLettersCountOnIndex(refIndex1, 0)) + 1;

                break;

            case "sum":

            case "prod":

                //ここでは、ΣまたはΠの長さとその後の空白で3文字確保すればよい。

                //もしΣ（Π）の下の数式が5文字以上なら、オーバーした文字数*0.5だけ横の長さを増やす。

                let lenSum = getFormulaLettersCountOnIndex(refIndex, 0);

                if (lenSum > 4) answer += 0.5 * (lenSum - 4);

                answer += 3;

                break;

            case "sumdu":

            case "proddu":

                //ここでは、ΣまたはΠの長さとその後の空白で3文字確保すればよい。

                //もしΣ（Π）の上または下の数式が5文字以上なら、オーバーした文字数*0.5だけ横の長さを増やす。

                let lensumDu0 = getFormulaLettersCountOnIndex(refIndex, 0);

                let lensumDu1 = getFormulaLettersCountOnIndex(refIndex1, 0);



                let maxSumLen;

                if (lensumDu0 > lensumDu1) maxSumLen = lensumDu0;

                else maxSumLen = lensumDu1;

                if (maxSumLen > 4) answer += 0.5 * (maxSumLen - 4);

                answer += 3;

                break;

            case "sqrt":

                //ここでは、√の中身の長さに1を足した値を返す。

                //ここではrefIndex1の値を読み取る。

                answer += 1 + getFormulaLettersCountOnIndex(refIndex1, 0);

                break;

            case "abs":

            case "floor":

            case "ceil":

            case "norm":

                //ここでは、囲まれている数式の長さに2を足した値を返す。

                answer += 2 + getFormulaLettersCountOnIndex(refIndex, 0);

                break;

            case "fracd1":

            case "fracd2":

            case "fracdn":

            case "fracd":

            case "fracp1":

            case "fracp2":

            case "fracpn":

            case "fracp":

                //ここでは、分母の中身の長さに1を足した値を返す。

                //ここではrefIndex1の値を読み取る。

                answer += 1 + getFormulaLettersCountOnIndex(refIndex1, 0);

                break;

            case "slashFrac":

                //ここでは、下を含め、スラッシュ分(1)を足した値を返す。

                answer += 1;

            case "int1":

            case "oint1":

                //ここでは、二つの式の長さに2を足した値を返す。

                answer += 2 + getFormulaLettersCountOnIndex(refIndex, 0) + getFormulaLettersCountOnIndex(refIndex1, 0);

                break;

            case "int2":

            case "oint2":

                //ここでは、下端の文字数-1と、上端の文字数を比較して、多い方を0.5倍して足しつつ、そこに二つの式の長さと、2を足した値を返す。

                let lenint2_0 = getFormulaLettersCountOnIndex(refIndex, 0);

                let lenint2_1 = getFormulaLettersCountOnIndex(refIndex1, 0);



                let maxInt2Len;

                if (lenint2_0 - 1 > lenint2_1) maxInt2Len = lenint2_0 - 1;

                else maxInt2Len = lenint2_1;



                answer += 2 + maxInt2Len * 0.5 + getFormulaLettersCountOnIndex(refIndex2, 0) + getFormulaLettersCountOnIndex(refIndex3, 0);

                break;

            case "int3":

            case "oint3":

                //ここでは、下端の文字数-1に0.5を掛けた値、二つの式の長さおよび2を足した値を返す。

                answer += 2 + (getFormulaLettersCountOnIndex(refIndex, 0) - 1) * 0.5 + getFormulaLettersCountOnIndex(refIndex1, 0) + getFormulaLettersCountOnIndex(refIndex2, 0);

                break;

            case "limit":

                //ここでは、下の数式の長さが7以上のとき、数式の長さ-6に0.5を掛けた数をを足しながら、極限を取る数式の長さと3を足す。

                answer += 3;

                if (getFormulaLettersCountOnIndex(refIndex, 0) > 6) answer += (getFormulaLettersCountOnIndex(refIndex, 0) - 6) * 0.5;

                answer += getFormulaLettersCountOnIndex(refIndex1, 0);

                break;

            case "pmatrix":

            case "bmatrix":

            case "vmatrix":

            case "Vmatrix":

                //ここでは、行列内部のことに加え、その外側のかっこの分(2)も足せばよい。

                answer += getFormulaLettersCountOnMatrix(formulaJson, i) + 2;

                break;

            case "divideCaseTerm":

                //ここでは、下の内容に加え、条件のかっこ(2)も足せばよい。

                answer += 2;

            case "divideCase":

                //ここでは、場合分け内部に加え、場合分けのかっこ(1)も足せばよい。

                answer += getFormulaLettersCountOnMatrix(formulaJson, i) + 1;

                break;

        }

    }



    return answer;

}



function getFormulaLettersCountOnMatrix(formulaJson, i) {

    //行列の各列について、各行を見て、それから最長のものを取り出して登録しておく。

    let lengthList = [];
    let rowCount = formulaJson.parts[i].rowCount;

    let columnCount = formulaJson.parts[i].columnCount;

    for (let j = 0; j < columnCount; j++) {

        lengthList.push(0);

    }



    //まず一行ずつ調べる。

    for (let row = 0; row < rowCount; row++) {

        for (let column = 0; column < columnCount; column++) {

            for (let k = 0; k < formula.length; k++) {

                if (formulaJson.parts[i].references.indexOf(formula[k].formulaIndex) != -1) {

                    if (formula[k].hasOwnProperty('row')) {

                        if (formula[k].row == row && formula[k].column == column) {

                            let nowLength = getFormulaLettersCountOnIndex(formula[k].formulaIndex, 0);

                            if (nowLength > lengthList[column]) lengthList[column] = nowLength;

                        }

                    }

                }

            }

        }

    }



    //各列で足していく。

    let answer = 0;

    for (let j = 0; j < columnCount; j++) {

        //各列の最大値を足していく。

        answer += lengthList[j];

    }

    answer += columnCount + 1;



    return answer;

}