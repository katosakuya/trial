<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h3>ドラッグ＆ドロップ</h3>
    <div class="flex-row">
        <div id="1" class="box drag">
            <div class="item"><img src="/img/migatte_kizashi.png" alt=""></div>
        </div>
        <div id="2" class="box drop">どろっぷ1</div>
        <div id="3" class="box drop">どろっぷ2</div>
        <div id="4" class="box drop">どろっぷ3</div>
    </div>
</body>

<script src="script.js"></script>

<style>
    @charset "utf-8";

    body {
        text-align: center;
    }

    .flex-row {
        display: flex;
        justify-content: center;
    }

    .box {
        line-height: 80px;
        height: 80px;
        width: 80px;
        border: 1px solid gray;
    }

    .item {
        height: 80px;
    }

    .item > img {
        width: 100%;
        height: 80px;
        object-fit: cover;
    }

    .box.drag {
        background-color: skyblue;
    }

    .box.dragging {
        background-color: skyblue;
        opacity: 0.5;
    }
</style>

<script>
    // drag 設定
    document.querySelector(".box.drag").draggable = true;
    document.querySelector(".box.drag").addEventListener("dragstart", onDragStart);

    // drop 設定
    document.querySelectorAll(".box.drop").forEach((element) => {
        element.addEventListener("drop", onDrop);
        element.addEventListener("dragover", onDragover);
        element.addEventListener("dragenter", onDragenter);
        element.addEventListener("dragleave", onDragleave);
    });

    /**
     * ドラッグ処理
     * @param {Event} event 
     */
    function onDragStart(event) {
        event.dataTransfer.setData("text", event.currentTarget.id);
    }

    /**
     * ドロップ処理
     * @param {Event} event 
     */
    function onDrop(event) {
        event.currentTarget.classList.remove("dragging");
        const boxs = [...document.querySelectorAll(".box")];
        if (boxs.indexOf(event.currentTarget) === 0) {
            event.currentTarget.before(document.getElementById(event.dataTransfer.getData("text")));
        } else {
            console.log(event.currentTarget)
            event.currentTarget.after(document.getElementById(event.dataTransfer.getData("text")));
            console.log(event.currentTarget)
        }
    }

    /**
     * 操作が要素上に入ってきたとき
     * @param {Event} event 
     */
    function onDragenter(event) {
        event.currentTarget.classList.toggle("dragging");
    }

    /**
     * 操作が要素上から出たとき
     * @param {Event} event 
     */
    function onDragleave(event) {
        event.currentTarget.classList.toggle("dragging");
    }

    /**
     * 操作が要素上を通過してるとき
     * @param {Event} event 
     */
    function onDragover(event) {
        event.preventDefault();
    }
</script>