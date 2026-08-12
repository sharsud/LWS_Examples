<!DOCTYPE HTML>
<html>
<head>
    <title>Windows & Tabs Practice - Learn with Psudo</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
    <link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
</head>
<body class="landing">
<div id="page-wrapper">

        <?php include "../includes/generic_header.php"; ?>
<article id="main">
    <header>
        <h2>Mouse & Keyboard Actions with ActionChains</h2>
        <p>Master low-level user interactions, drag-and-drop, sliders, hover menus, context menus, and keyboard combinations using Selenium WebDriver for Python.</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <!-- 1. MOUSE HOVER DEMO -->
            <h3>1. Mouse Hover (move_to_element)</h3>
            <p>Hover over elements to reveal dynamic tooltips and sub-menus.</p>
            <div class="field">
                <style>
                    .hover-container { display: inline-block; position: relative; margin-right: 20px; }
                    .hover-menu { display: none; position: absolute; top: 100%; left: 0; background: #ffffff; border: 1px solid #ccc; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 10px; z-index: 100; min-width: 150px; }
                    .hover-container:hover .hover-menu { display: block; }
                    .tooltip-target { display: inline-block; padding: 10px 15px; background: #2ebaae; color: white; border-radius: 4px; cursor: pointer; }
                    .custom-tooltip { visibility: hidden; width: 140px; background-color: #333; color: #fff; text-align: center; border-radius: 6px; padding: 5px; position: absolute; z-index: 1; bottom: 125%; left: 50%; margin-left: -70px; opacity: 0; transition: opacity 0.3s; }
                    .hover-container:hover .custom-tooltip { visibility: visible; opacity: 1; }
                </style>
                <div class="hover-container" id="hoverMenuContainer">
                    <button type="button" class="button small" id="hoverDropdownBtn">Hover Over Me (Menu)</button>
                    <div class="hover-menu" id="hoverMenuContent">
                        <a href="#option1" id="menuItem1" style="display:block; padding: 5px 0;">Option 1</a>
                        <a href="#option2" id="menuItem2" style="display:block; padding: 5px 0;">Option 2</a>
                        <a href="#option3" id="menuItem3" style="display:block; padding: 5px 0;">Option 3</a>
                    </div>
                </div>

                <div class="hover-container" id="tooltipContainer">
                    <span class="tooltip-target" id="tooltipTrigger">Hover for Tooltip</span>
                    <span class="custom-tooltip" id="dynamicTooltip">ActionChains Hover Tooltip!</span>
                </div>
            </div>
            <pre><code># XPath / CSS Selectors
# Hover Trigger: //button[@id='hoverDropdownBtn']
# Hidden Item:   //a[@id='menuItem2']</code></pre>

            <hr />

            <!-- 2. SLIDER & CLICK AND HOLD -->
            <h3>2. Slider & Click and Hold (move_by_offset)</h3>
            <p>Simulate clicking, dragging along an axis, and releasing mouse buttons.</p>
            <div class="field">
                <style>
                    .slider-track { width: 100%; max-width: 400px; height: 12px; background: #e0e0e0; border-radius: 6px; position: relative; margin: 15px 0; }
                    .slider-thumb { width: 24px; height: 24px; background: #ed4956; border-radius: 50%; position: absolute; top: -6px; left: 0px; cursor: pointer; }
                </style>
                <label for="rangeSlider">Standard Range Slider:</label>
                <input type="range" id="rangeSlider" name="rangeSlider" min="0" max="100" value="20" oninput="document.getElementById('sliderVal').innerText = this.value">
                <p>Slider Value: <strong><span id="sliderVal">20</span></strong></p>

                <label>Custom Axis Drag Slider:</label>
                <div class="slider-track" id="sliderTrack">
                    <div class="slider-thumb" id="customSliderThumb"></div>
                </div>
                <p>Custom Offset Position: <strong><span id="customSliderVal">0</span>px</strong></p>
            </div>
            <pre><code># Locators
# Custom Thumb: //div[@id='customSliderThumb']</code></pre>

            <hr />

            <!-- 3. DRAG AND DROP -->
            <h3>3. Drag and Drop (drag_and_drop)</h3>
            <p>Drag source items into target droppable zones.</p>
            <div class="field">
                <style>
                    .drag-box { width: 120px; height: 60px; background: #474747; color: #fff; text-align: center; line-height: 60px; cursor: move; border-radius: 4px; display: inline-block; }
                    .drop-zone { width: 200px; height: 100px; background: #f4f4f4; border: 2px dashed #aaa; border-radius: 6px; text-align: center; line-height: 100px; display: inline-block; vertical-align: top; margin-left: 20px; color: #777; }
                    .drop-zone.hovered { border-color: #ed4956; background: #ffebeb; }
                    .drop-zone.dropped { background: #e6fffa; border-color: #2ebaae; color: #2ebaae; font-weight: bold; }
                </style>
                <div class="drag-box" id="draggableItem" draggable="true">Drag Me</div>
                <div class="drop-zone" id="droppableTarget">Drop Here</div>
                <p id="dragDropStatus" style="margin-top: 10px; font-weight: bold; color: #ed4956;">Status: Waiting for action...</p>
            </div>

            <hr />

            <!-- 4. RIGHT CLICK & DOUBLE CLICK -->
            <h3>4. Right Click (Context Menu) & Double Click</h3>
            <p>Trigger right-click context menus and double-click events.</p>
            <div class="field">
                <style>
                    .context-menu { display: none; position: absolute; background: #ffffff; border: 1px solid #ccc; box-shadow: 2px 2px 5px rgba(0,0,0,0.2); width: 150px; z-index: 1000; list-style: none; padding: 5px 0; margin: 0; }
                    .context-menu li { padding: 8px 12px; cursor: pointer; color: #333; }
                    .context-menu li:hover { background: #f0f0f0; }
                </style>
                <button type="button" id="contextClickArea" class="button">Right Click Me</button>
                <button type="button" id="doubleClickArea" class="button alt">Double Click Me</button>
                <p id="clickActionResult" style="margin-top: 10px; font-weight: bold;"></p>

                <ul id="customContextMenu" class="context-menu">
                    <li id="menuEdit" onclick="setActionResult('Context Action: Edit Clicked')">Edit</li>
                    <li id="menuCopy" onclick="setActionResult('Context Action: Copy Clicked')">Copy</li>
                    <li id="menuDelete" onclick="setActionResult('Context Action: Delete Clicked')">Delete</li>
                </ul>
            </div>

            <hr />

            <!-- 5. KEYBOARD SHORTCUTS & COMBINATIONS -->
            <h3>5. Keyboard Shortcuts & Combined Interactions</h3>
            <p>Demonstrate modifier keys (SHIFT, CONTROL/COMMAND) and multi-selection.</p>
            <div class="field">
                <label for="keyInputSource">Text Input (Uppercase via SHIFT):</label>
                <input type="text" id="keyInputSource" placeholder="Type text here..." />

                <label for="keyInputTarget" style="margin-top: 15px;">Target Input (Copy/Paste Destination):</label>
                <input type="text" id="keyInputTarget" placeholder="Pasted result will appear here..." />

                <label style="margin-top: 15px;">Multi-Select List (CTRL + Click):</label>
                <style>
                    .selectable-list { list-style: none; padding: 0; width: 250px; }
                    .selectable-list li { padding: 10px; border: 1px solid #ddd; margin-bottom: -1px; cursor: pointer; user-select: none; }
                    .selectable-list li.selected { background-color: #ed4956; color: white; }
                </style>
                <ul class="selectable-list" id="multiSelectList">
                    <li id="item1">Item 1: Learn Selenium</li>
                    <li id="item2">Item 2: Master ActionChains</li>
                    <li id="item3">Item 3: Python Automation</li>
                    <li id="item4">Item 4: Playwright Concepts</li>
                </ul>
            </div>

        </div>
    </section>
</article>
<?php include "../includes/generic_footer.php"; ?>

</div>
<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrollex.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/browser.min.js"></script>
<script src="../assets/js/breakpoints.min.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/main.js"></script>
<!-- Interactive ActionChains Support Scripts -->
<script>
    // Custom Slider Dragging Logic
    const thumb = document.getElementById('customSliderThumb');
    const track = document.getElementById('sliderTrack');
    const valDisplay = document.getElementById('customSliderVal');
    let isDragging = false;

    thumb.addEventListener('mousedown', (e) => {
        isDragging = true;
    });

    document.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        const rect = track.getBoundingClientRect();
        let offsetX = e.clientX - rect.left;
        if (offsetX < 0) offsetX = 0;
        if (offsetX > rect.width - 24) offsetX = rect.width - 24;
        thumb.style.left = offsetX + 'px';
        valDisplay.innerText = Math.round(offsetX);
    });

    document.addEventListener('mouseup', () => { isDragging = false; });

    // Drag and Drop Logic
    const dragItem = document.getElementById('draggableItem');
    const dropTarget = document.getElementById('droppableTarget');
    const statusText = document.getElementById('dragDropStatus');

    dragItem.addEventListener('dragstart', (e) => {
        e.dataTransfer.setData('text/plain', 'dragged');
    });

    dropTarget.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropTarget.classList.add('hovered');
    });

    dropTarget.addEventListener('dragleave', () => {
        dropTarget.classList.remove('hovered');
    });

    dropTarget.addEventListener('drop', (e) => {
        e.preventDefault();
        dropTarget.classList.remove('hovered');
        dropTarget.classList.add('dropped');
        dropTarget.innerText = 'Dropped!';
        statusText.innerText = 'Status: Successfully Dropped!';
        statusText.style.color = '#2ebaae';
    });

    // Context Menu Logic
    const contextBtn = document.getElementById('contextClickArea');
    const contextMenu = document.getElementById('customContextMenu');

    contextBtn.addEventListener('contextmenu', (e) => {
        e.preventDefault();
        contextMenu.style.display = 'block';
        contextMenu.style.left = e.pageX + 'px';
        contextMenu.style.top = e.pageY + 'px';
    });

    document.addEventListener('click', () => {
        contextMenu.style.display = 'none';
    });

    // Double Click Logic
    const doubleClickBtn = document.getElementById('doubleClickArea');
    doubleClickBtn.addEventListener('dblclick', () => {
        setActionResult('Double Click Action Triggered!');
    });

    function setActionResult(msg) {
        document.getElementById('clickActionResult').innerText = msg;
    }

    // Multi-select List Logic
    const listItems = document.querySelectorAll('#multiSelectList li');
    listItems.forEach(item => {
        item.addEventListener('click', (e) => {
            if (e.ctrlKey || e.metaKey) {
                item.classList.toggle('selected');
            } else {
                listItems.forEach(i => i.classList.remove('selected'));
                item.classList.add('selected');
            }
        });
    });
</script>
</body>
</html>
