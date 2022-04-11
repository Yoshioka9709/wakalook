//高さ指定
let mode = "";
let isPaletteModal = false;
let isStampModal = false;
let isWhite = true;
let wasLoadImage = false;
let isInputFormulaDialog = false;

let imgSrc = "";
let stampSize = "";
let imageSize = "";

//変数
let width = 900;
let height = 600;

let maxWidth = 900;

const CONST_HEIGHT = 600;

//タッチイベントにおける座標の誤差
//これらはレイアウトのマージンを変更した際などに変更する必要がある
const diffX = 5;
const diffY = 145;

//戻るボタン実装
var imageMemory = new Array(100000);
var flagMemory = 0;
var maxFlagMemory = 99999;

window.addEventListener("load", () => {
    const canvas = document.querySelector("#draw-area");
    canvas.width = width;
    canvas.height = height;
    const context = canvas.getContext("2d");
    context.fillStyle = "#FFFFFF"; //筆に白い絵の具をつけて
    context.fillRect(0, 0, width, height); //四角を描く

    // 現在のマウスの位置を中心に、現在選択している線の太さを「○」で表現するために使用するcanvas
    const canvasForWidthIndicator = document.querySelector("#line-width-indicator");
    canvasForWidthIndicator.width = width;
    canvasForWidthIndicator.height = height;

    const contextForWidthIndicator = canvasForWidthIndicator.getContext(
      "2d"
    );

    const layeredCanvasArea = document.querySelector("#layerd-canvas-area");
    layeredCanvasArea.width = width;
    layeredCanvasArea.height = height;

    const lastPosition = { x: null, y: null };
    let isDrag = false;
    let currentColor = "#000000";
    let pastPencilColor = "#000000";

    let currentLineWidth = 1;

    const formulaDialog = document.querySelector("#formulaDialog");
    formulaDialog.close();

    initEventHandler();
    initColorPalette();
    initConfigOfLineWidth();

    // 現在の線の太さを記憶する変数
    // <input id="range-selector" type="range"> の値と連動する

    if(images) {
      loadPostImages();
    }

    strokeBorder();
    saveCanvasData();
    fitCanvasSize();

    //始めから鉛筆が使えるようにしておく。
    modeChange("pencil");

    window.onresize = fitCanvasSize;

    function loadPostImages() {
      for(let i = 0; i < images.length; i ++) {
        if(i > 0) {
          plusCanvas();
        }

        let img = new Image(); // 画像
        let dataUrl = dir + "/images/data/" + images[i] + "?" + new Date().getTime(); // 読み込んだファイルURL

        // 画像が読み込んだ時に実行する
        img.onload = function() {
          let magnification = img.height / CONST_HEIGHT;
          let imgWidth = Math.floor(img.width / magnification);
          let imgHeight = Math.floor(img.height / magnification);

          context.drawImage(img, 0, i * CONST_HEIGHT, imgWidth, imgHeight);
          saveCanvasData();
        }

        img.src = dataUrl;
      }
    }

    function draw(x, y) {
      if (!isDrag) {
        return;
      }

      if(mode == "pencil" || mode == "eraser") {
        context.lineCap = "round";
        context.lineJoin = "round";
        context.lineWidth = currentLineWidth;
        context.strokeStyle = currentColor;
        if (lastPosition.x === null || lastPosition.y === null) {
          context.moveTo(x, y);
        } else {
          context.moveTo(lastPosition.x, lastPosition.y);
        }
        context.lineTo(x, y);
        context.stroke();

        lastPosition.x = x;
        lastPosition.y = y;
      }

      if(mode == "pencil") isWhite = false;
    }

    // <canvas id="line-width-indicator"> 上で現在のマウスの位置を中心に
    // 線の太さを表現するための「○」を描画する。
    function showLineWidthIndicator(x, y) {
      contextForWidthIndicator.lineCap = "round";
      contextForWidthIndicator.lineJoin = "round";

      //もし消しゴムなら、外枠の色を黒にする。そうでないなら、currentColorにする。
      if(mode == "eraser") contextForWidthIndicator.strokeStyle = "#000";
      else contextForWidthIndicator.strokeStyle = currentColor;
      contextForWidthIndicator.fillStyle = currentColor;

      // 「○」の線の太さは細くて良いので1で固定
      contextForWidthIndicator.lineWidth = 1;

      // 過去に描画「○」を削除する。過去の「○」を削除しなかった場合は
      // 過去の「○」が残り続けてします。(以下の画像URLを参照)
      // https://tsuyopon.xyz/wp-content/uploads/2018/09/line-width-indicator-with-bug.gif
      contextForWidthIndicator.clearRect(
        0,
        0,
        canvasForWidthIndicator.width,
        canvasForWidthIndicator.height
      );

      contextForWidthIndicator.beginPath();

      if(mode == "pencil" || mode == "eraser") {
      	// x, y座標を中心とした円(「○」)を描画する。
      	// 第3引数の「currentLineWidth / 2」で、実際に描画する線の太さと同じ大きさになる。
      	// ドキュメント: https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/arc
      	contextForWidthIndicator.arc(
          x,
          y,
          currentLineWidth / 2,
          0,
          2 * Math.PI
      	);

       	if(mode == "pencil") contextForWidthIndicator.fill();
        else { 
	  contextForWidthIndicator.stroke();
	  contextForWidthIndicator.fill();
	}
      } else if (mode == "stamp") {
        //スタンプがどのように押されるかのプレビューを見せる
        let img = new Image();
	img.src = imgSrc;
	stampSize = document.querySelector('#stamp-size-number-field').value;

	let imgWidth = img.width * (Number(stampSize) / 100);
	let imgHeight = img.height * (Number(stampSize) / 100);

	let showX = x - imgWidth / 2;
	let showY = y - imgHeight / 2;

	contextForWidthIndicator.drawImage(img, showX, showY, imgWidth, imgHeight);
      } else if(mode == "image") {
        if(wasLoadImage) {
          //画像がどのように表示されるかのプレビューを見せる
          let img = new Image();
          img.src = imgSrc;
          imageSize = document.querySelector('#image-size-number-field').value;
          let magnification = img.height / CONST_HEIGHT;

          let imgWidth = Math.floor(img.width / magnification * Number(imageSize) / 100);
          let imgHeight = Math.floor(img.height / magnification * Number(imageSize) / 100);

          let showX = x - imgWidth / 2;
          let showY = y - imgHeight / 2;

          contextForWidthIndicator.drawImage(img, showX, showY, imgWidth, imgHeight);
        }
      } else if(mode == "formula") {
        let img = new Image();
        img.src = imgSrc;
        imageSize = document.querySelector('#formula-size-number-field').value;

        let imgWidth = img.width * (Number(imageSize) / 100);
        let imgHeight = img.height * (Number(imageSize) / 100);

        let showX = x - imgWidth / 2;
        let showY = y - imgHeight / 2;

        contextForWidthIndicator.drawImage(img, showX, showY, imgWidth, imgHeight);
      }
    }

    function clear() {
      let clearDialog = document.getElementById("clearDialog");
      clearDialog.style.display = "block";
      return;
    }

    function dragStart(event) {
      context.beginPath();
      isDrag = true;
    }

    function dragEnd(event) {
      context.closePath();
      isDrag = false;
      lastPosition.x = null;
      lastPosition.y = null;
    }

    function initEventHandler() {
      const plusButton = document.querySelector("#plus-button");
      const pencilButton = document.querySelector("#pencil-button");
      const clearButton = document.querySelector("#clear-button");
      const eraserButton = document.querySelector("#eraser-button");
      const stampButton = document.querySelectorAll(".stamp-button");
      const textButton = document.querySelector("#text-button");
      const stampModalButton = document.querySelector(".stamp-modal-button");
      const colorRectangle = document.querySelector("#color-rectangle");
      const undoButton = document.querySelector("#undo-button");
      const redoButton = document.querySelector("#redo-button");
      const formulaButton = document.querySelector('#formula-image');
      plusButton.addEventListener("click", () => {
        plusCanvas();
        strokeBorder();
        saveCanvasData();
        oadialogShow("キャンバスを追加しました", false);
      });
      pencilButton.addEventListener("click", () => {
	currentColor = pastPencilColor;
        modeChange("pencil");
      });
      clearButton.addEventListener("click", clear);
      eraserButton.addEventListener("click", () => {
        currentColor = "#FFFFFF";
        modeChange("eraser");
      });
      stampButton.forEach(function (button) {
        button.addEventListener("click", () => {
          modeChange("stamp");
          imgSrc = button.src;
          stampModalManagement();
        });
      });
      textButton.addEventListener("click", () => {
        modeChange("text");
      });
      colorRectangle.addEventListener("click", () => {
        if(isPaletteModal) {
          isPaletteModal = false;
          document.querySelector("#color-palette").style.visibility = "hidden";
        } else {
          isPaletteModal = true;
          document.querySelector("#color-palette").style.visibility = "visible";
        }
      });
      stampModalButton.addEventListener("click", () => {
        stampModalManagement();
      });
      undoButton.addEventListener("click", undo);
      redoButton.addEventListener("click", redo);
      formulaButton.addEventListener("click", () => {
        isInputFormulaDialog = true;
        initializeFormulaDialog();

        //数式ボタンが押されたとき、ダイアログを表示する。
        const formulaDialog = document.getElementById("formulaDialog");
        formulaDialog.showModal();
      });


      function stampModalManagement(){
        if(isStampModal) {
          isStampModal = false;
          document.querySelectorAll(".stamp-image-list").forEach(function (modal) {
            modal.style.display = "none";
          });
        } else {
          isStampModal = true;
          document.querySelectorAll(".stamp-image-list").forEach(function (modal) {
            modal.style.display = "flex";
          });
        }
      }

      layeredCanvasArea.addEventListener("mousedown", (event) => {
        if(mode == "pencil" || mode == "eraser") {
          dragStart();
        }
        if(mode == "stamp") {
          let img = new Image();
          img.src = imgSrc;
          stampSize = document.querySelector('#stamp-size-number-field').value;

          let imgWidth = img.width * (Number(stampSize) / 100);
          let imgHeight = img.height * (Number(stampSize) / 100)

          let x = event.layerX - imgWidth / 2;
          let y = event.layerY - imgHeight / 2;

          context.drawImage(img, x, y ,imgWidth, imgHeight);
          isWhite = false;
        }
        if(mode == "image") {
          let img = new Image();
          img.src = imgSrc;
          imageSize = document.querySelector('#image-size-number-field').value;
          let magnification = img.height / CONST_HEIGHT;

          let imgWidth = Math.floor(img.width / magnification * Number(imageSize) / 100);
          let imgHeight = Math.floor(img.height / magnification * Number(imageSize) / 100);

          let x = event.layerX - imgWidth / 2;
          let y = event.layerY - imgHeight / 2;

          context.drawImage(img, x, y, imgWidth, imgHeight);
          isWhite = false;
          modeChange("pencil");
        }
        if(mode == "formula") {
          let img = new Image();
          img.src = imgSrc;
          imageSize = document.querySelector('#formula-size-number-field').value;

          let imgWidth = img.width * (Number(imageSize) / 100);
          let imgHeight = img.height * (Number(imageSize) / 100);

          let x = event.layerX - imgWidth / 2;
          let y = event.layerY - imgHeight / 2;

          context.drawImage(img, x, y, imgWidth, imgHeight);
          isWhite = false;
          modeChange("pencil");
        }
        if(mode == "text") {
          context.fillStyle = currentColor;
          let fontSize = document.querySelector("#text-size-number-field").value;
          context.font =  fontSize + "px monospace";
          let x = event.layerX
          let y = event.layerY
          let text = document.querySelector("#text-input").value;
          context.fillText(text, x, y);
          isWhite = false;
        }
      });

      layeredCanvasArea.addEventListener("mouseup", (event) => {
          dragEnd();
          saveCanvasData();
      });
      layeredCanvasArea.addEventListener("mouseout", dragEnd);
      layeredCanvasArea.addEventListener("mousemove", (event) => {
        // 2つのcanvasに対する描画処理を行う

        // 実際に線を引くcanvasに描画を行う。(ドラッグ中のみ線の描画を行う)
        draw(event.layerX, event.layerY);

        // 現在のマウスの位置を中心として、線の太さを「○」で表現するためのcanvasに描画を行う
        showLineWidthIndicator(event.layerX, event.layerY);
      });
      layeredCanvasArea.addEventListener("touchstart", (event) => {
        if(mode == "pencil" || mode == "eraser") {
          dragStart();
          draw(event.targetTouches[0].pageX - diffX, event.targetTouches[0].pageY - diffY);
        }
        if(mode == "stamp") {
          let img = new Image();
          img.src = imgSrc;
          stampSize = document.querySelector('#stamp-size-number-field').value;

          let imgWidth = img.width * (Number(stampSize) / 100);
          let imgHeight = img.height * (Number(stampSize) / 100);

          let x = event.targetTouches[0].pageX - diffX - imgWidth / 2;
          let y = event.targetTouches[0].pageY - diffY - imgHeight / 2;

          context.drawImage(img, x, y ,imgWidth, imgHeight);
          isWhite = false;
        }
        if(mode == "image") {
          let img = new Image();
          img.src = imgSrc;
          imageSize = document.querySelector("#image-size-number-field").value;
          let magnification = img.height / CONST_HEIGHT;

          let imgWidth = Math.floor(img.width / magnification * Number(imageSize) / 100);
          let imgHeight = Math.floor(img.height / magnification * Number(imageSize) / 100);

          let x = event.targetTouches[0].pageX - diffX - imgWidth / 2;
          let y = event.targetTouches[0].pageY - diffY - imgHeight / 2;

          context.drawImage(img, x, y, imgWidth, imgHeight);
          isWhite = false;
          modeChange("pencil");
        }
        if(mode == "formula") {
          let img = new Image();
          img.src = imgSrc;
          imageSize = document.querySelector('#formula-size-number-field').value;

          let imgWidth = img.width * (Number(imageSize) / 100);
          let imgHeight = img.height * (Number(imageSize) / 100);

          let x = event.targetTouches[0].pageX - diffX - imgWidth / 2;
          let y = event.targetTouches[0].pageY - diffY - imgHeight / 2;

          context.drawImage(img, x, y, imgWidth, imgHeight);
          isWhite = false;
          modeChange("pencil");
        }
        if(mode == "text") {
          context.fillStyle = currentColor;
          let fontSize = document.querySelector("#text-size-number-field").value;
          context.font =  fontSize + "px monospace";

          let x = event.targetTouches[0].pageX - diffX;
          let y = event.targetTouches[0].pageY - diffY;

          let text = document.querySelector("#text-input").value;
          context.fillText(text, x, y);
          isWhite = false;
        }
      });
      layeredCanvasArea.addEventListener("touchmove", (event) => {
        if(event.targetTouches.length == 1) {
          event.preventDefault();
          // 2つのcanvasに対する描画処理を行う

          // 実際に線を引くcanvasに描画を行う。(ドラッグ中のみ線の描画を行う)
          draw(event.targetTouches[0].pageX - diffX, event.targetTouches[0].pageY - diffY);

          // 現在のマウスの位置を中心として、線の太さを「○」で表現するためのcanvasに描画を行う
          showLineWidthIndicator(event.targetTouches[0].pageX - diffX, event.targetTouches[0].pageY - diffY);
        }
      }, {passive: false});
      layeredCanvasArea.addEventListener("touchend", (event) => {
        dragEnd();
        saveCanvasData();
      });
      layeredCanvasArea.addEventListener("touchcancel", dragEnd);
    }

    function initColorPalette() {
      const joe = colorjoe.rgb("color-palette", currentColor);
      joe.on("done", (color) => {
        if(mode != "eraser") currentColor = color.hex();
        pastPencilColor = color.hex();
        const colorRectangle = document.querySelector("#color-rectangle");
        colorRectangle.style.backgroundColor = pastPencilColor;
      });
    }

    // 文字の太さの設定・更新を行う機能
    function initConfigOfLineWidth() {
      const textForCurrentSize = document.querySelector("#line-width");
      const rangeSelector = document.querySelector("#range-selector");
      const numberField = document.getElementById(
        "line-width-number-field"
      );
      // 線の太さを記憶している変数の値を更新する
      currentLineWidth = rangeSelector.value;

     // 線を<input type='number'>からも更新できるようにする。
      numberField.addEventListener("input", (event) => {
        const width = event.target.value;
        // 線の太さを記憶している変数の値を更新する
        currentLineWidth = width;
        rangeSelector.value = width;
        // 更新した線の太さ値(数値)を<input id="range-selector" type="range">の右側に表示する
        textForCurrentSize.innerText = width;
      });
      // "input"イベントをセットすることでスライド中の値も取得できるようになる。
      // ドキュメント: https://developer.mozilla.org/ja/docs/Web/HTML/Element/Input/range

      rangeSelector.addEventListener("input", (event) => {
        const width = event.target.value;
        numberField.value = width;
        // 線の太さを記憶している変数の値を更新する
        currentLineWidth = width;

        // 更新した線の太さ値(数値)を<input id="range-selector" type="range">の右側に表示する
        textForCurrentSize.innerText = width;
      });
    }

    function strokeBorder() {
      let action = height / CONST_HEIGHT;
      for(let i = 1; i < action; i ++) {
        context.beginPath();
        // 線を引くスタート地点に移動
        context.moveTo(0,i * CONST_HEIGHT);
        // スタート地点から(200,200)まで線を引く
        context.lineTo(width,i * CONST_HEIGHT);
        // 線の色
        context.strokeStyle = "black";
        // 線の太さ
        context.lineWidth = 1 ;
        // 線を描画する
        context.stroke() ;
      }
    }

    function plusCanvas(){
      height += CONST_HEIGHT;

      canvasForWidthIndicator.height = height;
      layeredCanvasArea.height = height;
      canvas.height = height;

      context.fillStyle = "#FFFFFF"; //筆に白い絵の具をつけて
      context.fillRect(0, 0, width, height); //四角を描く

      if(flagMemory > 0){
        context.putImageData(imageMemory[flagMemory], 0, 0);
      }
    }
});

window.addEventListener("keydown", (e)=>{
  const key = e.key;

  if(key == 'F5') {
    let res = window.confirm("このページの編集内容を保存せずにページを抜けてもいいですか。")
    if(!res) {
      e.preventDefault();
    }
  }

  if(isInputFormulaDialog) {
    if(key == 'ArrowUp' || key == 'ArrowDown') {
      e.preventDefault();
    }
  } else {
    if(key == 'y' && (e.ctrlKey || e.metaKey)) {
      e.preventDefault();
      redo();
    }
    if(key == 'z' && (e.ctrlKey || e.metaKey)) {
      e.preventDefault();
      undo();
    }
  }
});

//画像をアップロードする関数
function loadImage(obj) {
  var file =  obj.files; // fileの取得
  var reader = new FileReader();
  reader.readAsDataURL(file[0]); // fileの要素をdataURL形式で読み込む

  // ファイルを読み込んだ時に実行する
  reader.onload = function(){
    var dataUrl = reader.result; // 読み込んだファイルURL
    imgSrc = dataUrl;
    wasLoadImage = true;
    mode = "image";
  }

    //いずれにせよ、onchangeでイベントが発火するので、ここでリセットする。
    const selectFile = document.getElementById("selectFile");
    selectFile.value = "";
}

function undo() {
  const canvas = document.querySelector("#draw-area");
  const context = canvas.getContext("2d");

  if(flagMemory > 1) {
    flagMemory--;
    context.fillStyle = "#FFFFFF"; //筆に白い絵の具をつけて
    context.fillRect(0, 0, maxWidth, height); //四角を描く
    context.putImageData(imageMemory[flagMemory], 0, 0);
    //fitCanvasSize();
    strokeBorder();
  }
}

function redo() {
  const canvas = document.querySelector("#draw-area");
  const context = canvas.getContext("2d");

  if(flagMemory < imageMemory.length - 1) {
    flagMemory++;
    if(imageMemory[flagMemory] == undefined) {
      flagMemory--;
      return;
    }
    context.putImageData(imageMemory[flagMemory], 0, 0);
    strokeBorder();
  }
}

function fitCanvasSize() {
  // Canvas のサイズをクライアントサイズに合わせる
  const canvas = document.querySelector("#draw-area");
  const context = canvas.getContext("2d");
  const canvasForWidthIndicator = document.querySelector("#line-width-indicator");

  width = document.documentElement.clientWidth - 20;
  if(width > maxWidth) {
    maxWidth = width;
    canvas.width = width;
    canvasForWidthIndicator.width = width;
  }

  context.fillStyle = "#FFFFFF"; //筆に白い絵の具をつけて
  context.fillRect(0, 0, maxWidth, height); //四角を描く

  context.putImageData(imageMemory[flagMemory], 0, 0);
  
  strokeBorder();
}

function saveCanvasData(){
  const canvas = document.querySelector("#draw-area");
  const context = canvas.getContext("2d");

  if(flagMemory == imageMemory.length-1) {
    imageMemory.push(void 0);
    maxFlagMemory = flagMemory + 1;
  }
  ++ flagMemory;

  imageMemory[flagMemory] = context.getImageData(0,0,maxWidth,height);
}

//計算用紙を作る関数
function createCalculation() {
  window.open('../calculation');
}

function goToTopPage(userId) {
  if(isWhite) {
    //もし編集されていないなら
    window.location.href = "/mypage/?id=" + userId.toString();
  } else {
    tmdialogShow();
  }
}

function tmdialogShow() {
  let tmpDialog = document.getElementById("toMypageDialog");
  tmpDialog.style.display = "block";
  return;
}

function tmdialogHide() {
  let tmpDialog = document.getElementById("toMypageDialog");
  tmpDialog.style.display = "none";
  return;
}

function tmdialogYes(maxNumber) {
  tmdialogHide();
  saveAndDownload(maxNumber, true);
}

function tmdialogNo(userId) {
  tmdialogHide();
  window.location.href = "/mypage/?id=" + userId.toString();
}

function tmdialogCancel() {
  tmdialogHide();
}

function oadialogShow(text, isSubmit) {
  let oaDialog = document.getElementById("originalAlertDialog");
  let oadMessage = document.getElementById("oadialogMessage");
  oadMessage.textContent = text;
  oaDialog.style.display = "block";
  oaDialog.isSubmit = isSubmit.toString();
  return;
}

function oadialogOK() {
  let oaDialog = document.getElementById("originalAlertDialog");
  oaDialog.style.display = "none";
  if(oaDialog.isSubmit == "true") {
    let form = document.querySelector("#form");
    form.submit();
  }
  return;
}

function saveAndDownload(maxNumber, backToMypage) {
  let btMypage = document.getElementById("backToMypage");
  btMypage.value = backToMypage.toString();

  if(!id) {
    let nextNumber = Number(maxNumber) + 1;
    let nextTitle = "新規作成" + nextNumber.toString();
    let filenameInput = document.getElementById("ofdialogInput");
    filenameInput.value = nextTitle;
    let ofDialog = document.getElementById("originalFilenameDialog");
    ofDialog.style.display = "block";
    return;
  } else {
    let file_name = document.querySelector("#title").value;
    internalSaveAndDownload(file_name);
  }
}

function ofdialogOK(titles) {
  //まずダイアログを消す。
  ofdialogHide();

  //filename等を取得する。
  let file_name = document.getElementById("ofdialogInput").value;

  if(titles != "" && titles != null) {
    let titleArray = titles.split(',');
    if(titleArray.includes(file_name)) {
      oadialogShow("そのファイル名は既に使われています。他のファイル名を指定してください。", false);
      return;
    }
  } 
  if(file_name != "" && file_name != null && (file_name.match(/\[/) || file_name.match(/\]/) || file_name.match(/"/) || file_name.match(/,/))) {
    oadialogShow("ファイル名に [（左大カッコ）]（右大カッコ）\"（ダブルクオーテーション）,（コンマ）を含まないでください。 ", false);
    return;
  }

  internalSaveAndDownload(file_name);
}

function ofdialogCancel() {
  ofdialogHide();
}

function ofdialogHide() {
  let ofDialog = document.getElementById("originalFilenameDialog");
  ofDialog.style.display = "none";
  return;
}

function cdialogYes() {
  const canvas = document.querySelector("#draw-area");
  const context = canvas.getContext("2d");

  context.clearRect(0, 0, canvas.width, canvas.height);
  context.fillStyle = "#FFFFFF"; //筆に白い絵の具をつけて
  context.fillRect(0, 0, width, height); //四角を描く
  strokeBorder(context);
  saveCanvasData();

  isWhite = true;
  cdialogHide();
}

function cdialogNo() {
  cdialogHide();
}

function cdialogHide() {
  let cDialog = document.getElementById("clearDialog");
  cDialog.style.display = "none";
  return;
}

function internalSaveAndDownload(file_name) {
  const canvas = document.querySelector("#draw-area");
  const context = canvas.getContext("2d");

  if(file_name != "" && file_name != null) {
    console.log(file_name);

    let action = Math.floor(height / CONST_HEIGHT);

    let form = document.querySelector("#form");
    let titleInput = document.querySelector("#title");
    console.log(titleInput);
    titleInput.value = file_name;

    for(let i = 0; i < action; i ++) {
      var s_can = document.createElement('canvas');
      s_can.width = width;
      s_can.height = CONST_HEIGHT;
      var s_ctx = s_can.getContext("2d");
      var data = context.getImageData(0, i * CONST_HEIGHT, maxWidth, CONST_HEIGHT);
      s_ctx.putImageData(data, 0, 0);

      var imageData = s_can.toDataURL("image/png");
      imageData = imageData.replace(/^.*,/, '');

      var input = document.createElement("input");
      input.name = "image_" + (i + 1);
      input.value = imageData;
      form.appendChild(input);

      input = null;
    }

    oadialogShow("保存しました", true);
  } else if(file_name == "") {
    oadialogShow("ファイル名が入力されていません", false);
  }
}

function strokeBorder(context) {
  let action = height / CONST_HEIGHT;
  for(let i = 1; i < action; i ++) {
    context.beginPath();
    // 線を引くスタート地点に移動
    context.moveTo(0,i * CONST_HEIGHT);
    // スタート地点から(200,200)まで線を引く
    context.lineTo(width,i * CONST_HEIGHT);
    // 線の色
    context.strokeStyle = "black";
    // 線の太さ
    context.lineWidth = 1 ;
    // 線を描画する
    context.stroke() ;
  }
}

function modeChange(modeState) {
    mode = modeState;
    const qs1 = document.querySelectorAll(".edit-btn");
    qs1.forEach(function (item) {
      item.style.border = "solid 0px black";
    });

    let btn = document.querySelector("#" + mode + "-button");
    btn.style.border = "solid 1px black";

    console.log(modeState);
}

function formulaComplete() {
  MathJax.tex2svgPromise(getFormulaText())
  .then((svg) => {
    let svgTag = svg.getElementsByTagName("svg")[0];
    imgSrc = svg2src(svgTag);
    isInputFormulaDialog = false;
    formulaDialog.close();

    mode = "formula";
  });
}

function svg2src(svgElement) {
  //数式の長さを取得する。
  let formulaCount = getFormulaLettersCount();

  //横幅を設定する。
  svgElement.setAttribute("width", (20 * formulaCount).toString() + "em");

  let svgData = new XMLSerializer().serializeToString(svgElement);
  let answer = 'data:image/svg+xml;charset=utf-8;base64,' + btoa(svgData);

  return answer;
}