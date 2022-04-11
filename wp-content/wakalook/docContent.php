<?php

error_reporting(0);

if(isset($_GET['parts'])) {

    //partsが設定されているとき

    $res = TRUE;

    switch($_GET['parts']) {

        case "basiccontent":

            $res = include(dirname(__FILE__) . "/documentation/basiccontent.php");

            break;

        case "brace":

            $res = include(dirname(__FILE__) . "/documentation/brace.php");

            break;

        case "power":

            $res = include(dirname(__FILE__) . "/documentation/power.php");

            break;

        case "sqrt":

            $res = include(dirname(__FILE__) . "/documentation/sqrt.php");

            break;

        case "unit":

            $res = include(dirname(__FILE__) . "/documentation/unit.php");

            break;

        case "letter":

            $res = include(dirname(__FILE__) . "/documentation/letter.php");

            break;

        case "formulafunction":

            $res = include(dirname(__FILE__) . "/documentation/formulafunction.php");

            break;

        case "differential":

            $res = include(dirname(__FILE__) . "/documentation/differential.php");

            break;

        case "integral":

            $res = include(dirname(__FILE__) . "/documentation/integral.php");

            break;

        case "limit":

            $res = include(dirname(__FILE__) . "/documentation/limit.php");

            break;

        case "vector":

            $res = include(dirname(__FILE__) . "/documentation/vector.php");

            break;

        case "matrix":

            $res = include(dirname(__FILE__) . "/documentation/matrix.php");

            break;

        case "sumprod":

            $res = include(dirname(__FILE__) . "/documentation/sumprod.php");

            break;

        case "other":

            $res = include(dirname(__FILE__) . "/documentation/other.php");

            break;

        default:

            include(dirname(__FILE__) . "/documentation/notfound.php");

            break;

    }

    if($res == FALSE) {

        include(dirname(__FILE__) . "/documentation/notfound.php");

    }

} elseif(isset($_GET['content'])) {

    //contentが設定されているとき

    $res = TRUE;

    switch($_GET['content']) {

        case "whatdo":

            $res = include(dirname(__FILE__) . "/documentation/whatdo.php");

            break;

        case "quickuse":

            $res = include(dirname(__FILE__) . "/documentation/quickuse.php");

            break;

        case "formulasummary":

            $res = include(dirname(__FILE__) . "/documentation/formulasummary.php");

            break;

        case "formulaquickuse":

            $res = include(dirname(__FILE__) . "/documentation/formulaquickuse.php");

            break;

        case "formuladetails":

            $res = include(dirname(__FILE__) . "/documentation/formulaDetails.php");

            break;

        case "addcanvas":

            $res = include(dirname(__FILE__) . "/documentation/addcanvas.php");

            break;

        case "clear":

            $res = include(dirname(__FILE__) . "/documentation/clear.php");

            break;

        case "undo":

            $res = include(dirname(__FILE__) . "/documentation/undo.php");

            break;

        case "redo":

            $res = include(dirname(__FILE__) . "/documentation/redo.php");

            break;

        case "calculationsheet":

            $res = include(dirname(__FILE__) . "/documentation/calculationsheet.php");

            break;

        case "save":

            $res = include(dirname(__FILE__) . "/documentation/save.php");

            break;

        case "formulakeyboard":

            $res = include(dirname(__FILE__) . "/documentation/formulaKeyboard.php");

            break;

        default:

            $res = include(dirname(__FILE__) . "/documentation/notfound.php");

            break;

    }

    if($res == FALSE) {

        include(dirname(__FILE__) . "/documentation/notfound.php");

    }

} elseif(isset($_GET['category'])) {

    //categoryが設定されているとき

    $res = TRUE;

    switch($_GET['category']) {

        case "quick":

            $res = include(dirname(__FILE__) . "/documentation/quick.php");

            break;

        case "drawpen":

            $res = include(dirname(__FILE__) . "/documentation/drawpen.php");

            break;

        case "text":

            $res = include(dirname(__FILE__) . "/documentation/text.php");

            break;

        case "picture":

            $res = include(dirname(__FILE__) . "/documentation/picture.php");

            break;

        case "formula":

            $res = include(dirname(__FILE__) . "/documentation/formula.php");

            break;

        case "utility":

            $res = include(dirname(__FILE__) . "/documentation/utility.php");

            break;

        default:

            $res = include(dirname(__FILE__) . "/documentation/notfound.php");

            break;

    }

    if($res == FALSE) {

        include(dirname(__FILE__) . "/documentation/notfound.php");

    }

} else {

    //このときは、トップページを表示する。

    $res = include(dirname(__FILE__) . "/documentation/docTopPage.php");

    if($res == FALSE) {

        include(dirname(__FILE__) . "/documentation/notfound.php");

    }

}

error_reporting(-1);

?>