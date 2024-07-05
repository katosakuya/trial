<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Tier作成</title>
</head>
<body>
    <div class="tier-list">
        <div class="tier" id="tier-s">
            <div class="tier-label">S</div>
            <div class="tier-characters"></div>
        </div>
        <div class="tier" id="tier-a">
            <div class="tier-label">A</div>
            <div class="tier-characters"></div>
        </div>
        <div class="tier" id="tier-b">
            <div class="tier-label">B</div>
            <div class="tier-characters"></div>
        </div>
        <div class="tier" id="tier-c">
            <div class="tier-label">C</div>
            <div class="tier-characters"></div>
        </div>
        <div class="tier" id="unclassified">
            <div class="tier-characters"></div>
        </div>
    </div>
</body>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .tier-list {
        width: 80%;
        max-width: 800px;
        overflow: hidden; /* はみ出した部分削除 */
    }

    .tier {
        display: flex;
        padding: 20px;
        border-bottom: 1px solid #ddd;
    }

    .tier:last-child {
        border-bottom: none;
    }

    .tier-label {
        width: 50px;
        text-align: center;
        font-weight: bold; /*大文字*/
    }

    .tier-characters {
        display: flex;
        flex-wrap: wrap; /*折り返し*/
        flex: 1; 
        gap: 10px; /* 隙間 */
    }

    .character {
        width: 80px;
        height: 80px;
    }

    .character img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<script>
    const characters = []

    const tier = @json($tier)
    
    tier.forEach(function(char) {
        characters.push({ id: 'char'+char.id, name: char.id , image: 'img/' + char.english_name + '.png' })
    })

    console.log(characters)
    
    // ドラッグ中の要素のIDを保持する変数
    let draggedItemId = null
    
    // キャラクターを各ティアに追加
    characters.forEach(character => {
        const charElement = createCharacterElement(character)
        document.querySelector('#unclassified .tier-characters').appendChild(charElement)
    })
    
    // ドラッグ可能な要素にdragstartイベントを追加
    document.querySelectorAll('.character').forEach(charElement => {
        charElement.addEventListener('dragstart', onDragStart)
        // img要素をドラッグ可能にするための設定
        charElement.querySelector('img').setAttribute('draggable', 'false')
    })

    // 各ティアにドロップイベントを追加
    document.querySelectorAll('.tier').forEach(tier => {
        tier.addEventListener('dragover', onDragOver)
        tier.addEventListener('drop', onDrop)
    })

    // ドラッグが開始されたときに実行される関数
    function onDragStart(event) {
        draggedItemId = event.target.id
    }

    // ドラッグオーバー中のデフォルト動作をキャンセル
    function onDragOver(event) {
        event.preventDefault()
    }

    // ドロップされたときに実行される関数
    function onDrop(event) {
        event.preventDefault()
        const dropTarget = event.target.closest('.tier')

        if (!dropTarget) return // ドロップ先が存在しない場合は処理を終了

        const tierCharacters = dropTarget.querySelector('.tier-characters')
        const draggableElement = document.getElementById(draggedItemId)

        if (!tierCharacters || !draggableElement) return // 必要な要素が存在しない場合は処理を終了

        tierCharacters.appendChild(draggableElement)
        draggedItemId = null // ドラッグ中のアイテムIDをリセット
    }

    // 新しいキャラクター要素を作成する関数
    function createCharacterElement(character) {
        const charElement = document.createElement('div')
        charElement.classList.add('character')
        charElement.id = character.id
        charElement.draggable = true

        // imgタグを作成し、src属性を設定する
        const imgElement = document.createElement('img')
        imgElement.src = character.image
        const filename = character.image.substring(character.image.lastIndexOf('/') + 1)
        imgElement.alt = filename
        charElement.appendChild(imgElement);

        // dragstartイベントをcharElement要素に追加する
        charElement.addEventListener('dragstart', onDragStart);

        return charElement;
    }
</script>