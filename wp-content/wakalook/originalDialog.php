<div id="toMypageDialog" class="originalDialog">

  <div id="tmdialogBackground" class="originalDialogBackground"></div>

  <div id="tmdialogContent" class="originalDialogContent">

    <div id="tmdialogMessage" class="originalDialogMessage">変更内容を保存しますか。</div>

    <div id="tmdialogButtons" class="originalDialogButtons">

      <span class="originalDialogButton" onclick="tmdialogYes(<?php echo ManagementLogic::getMaxTitleNumberByUserId($_SESSION['login_user']['id']); ?>);">はい</span>

      <span class="originalDialogButton" onclick="tmdialogNo(<?php echo $_SESSION['login_user']['id'];?>);">いいえ</span>

      <span class="originalDialogButton" onclick="tmdialogCancel();">キャンセル</span>

    </div>

  </div>

</div>



<div id="clearDialog" class="originalDialog">

  <div id="cdialogBackground" class="originalDialogBackground"></div>

  <div id="cdialogContent" class="originalDialogContent">

    <div id="cdialogMessage" class="originalDialogMessage">このページの内容を、<br>全て消してもよいですか？</div>

    <div id="cdialogButtons" class="originalDialogButtons">

      <span class="originalDialogButton" onclick="cdialogYes();">はい</span>

      <span class="originalDialogButton" onclick="cdialogNo();">いいえ</span>

    </div>

  </div>

</div>



<div id="originalAlertDialog" class="originalDialog">

  <div id="oadialogBackground" class="originalDialogBackground"></div>

  <div id="oadialogContent" class="originalDialogContent">

    <div id="oadialogMessage" class="originalDialogMessage"></div>

    <div id="oadialogButtons" class="originalDialogButtons">

      <span class="originalDialogButton" onclick="oadialogOK();">OK</span>

    </div>

  </div>

  <input type="hidden" name="isSubmit" value="false">

</div>


<div id="originalFilenameDialog" class="originalDialog">

  <div id="ofdialogBackground" class="originalDialogBackground"></div>

  <div id="ofdialogContent" class="originalDialogContent">

    <div id="ofdialogMessage" class="originalDialogMessage">ファイル名を入力してください</div>

    <input type="text" id="ofdialogInput" class="originalDialogInput" value="ここに入力" autofocus></input>

    <div id="ofdialogButtons" class="originalDialogButtons">

      <span class="originalDialogButton" onclick="ofdialogOK(<?php echo ManagementLogic::getPostTitlesByUserId($_SESSION['login_user']['id']); ?>);">OK</span>

      <span class="originalDialogButton" onclick="ofdialogCancel();">キャンセル</span>

    </div>

  </div>

</div>