<?php
$lwsBase = '../';
$pageTitle = 'Windows & Tabs Practice - Learn with Psudo';
$pageCanonical = 'https://examples.learnwithpsudo.com/pages/mouseKey.php';

$extraHead = <<<'HTML'
<style>
.hover-container { display: inline-block; position: relative; margin-right: 20px; }
.hover-menu { display: none; position: absolute; top: 100%; left: 0; background: #ffffff; border: 1px solid #ccc; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 10px; z-index: 100; min-width: 150px; }
.hover-container:hover .hover-menu { display: block; }
.tooltip-target { display: inline-block; padding: 10px 15px; background: #2ebaae; color: white; border-radius: 4px; cursor: pointer; }
.custom-tooltip { visibility: hidden; width: 140px; background-color: #333; color: #fff; text-align: center; border-radius: 6px; padding: 5px; position: absolute; z-index: 1; bottom: 125%; left: 50%; margin-left: -70px; opacity: 0; transition: opacity 0.3s; }
.hover-container:hover .custom-tooltip { visibility: visible; opacity: 1; }
.slider-track { width: 100%; max-width: 400px; height: 12px; background: #e0e0e0; border-radius: 6px; position: relative; margin: 15px 0; }
.slider-thumb { width: 24px; height: 24px; background: #ed4956; border-radius: 50%; position: absolute; top: -6px; left: 0px; cursor: pointer; }
.drag-box { width: 120px; height: 60px; background: #474747; color: #fff; text-align: center; line-height: 60px; cursor: move; border-radius: 4px; display: inline-block; }
.drop-zone { width: 200px; height: 100px; background: #f4f4f4; border: 2px dashed #aaa; border-radius: 6px; text-align: center; line-height: 100px; display: inline-block; vertical-align: top; margin-left: 20px; color: #777; }
.drop-zone.hovered { border-color: #ed4956; background: #ffebeb; }
.drop-zone.dropped { background: #e6fffa; border-color: #2ebaae; color: #2ebaae; font-weight: bold; }
.context-menu { display: none; position: absolute; background: #ffffff; border: 1px solid #ccc; box-shadow: 2px 2px 5px rgba(0,0,0,0.2); width: 150px; z-index: 1000; list-style: none; padding: 5px 0; margin: 0; }
.context-menu li { padding: 8px 12px; cursor: pointer; color: #333; }
.context-menu li:hover { background: #f0f0f0; }
.selectable-list { list-style: none; padding: 0; width: 250px; }
.selectable-list li { padding: 10px; border: 1px solid #ddd; margin-bottom: -1px; cursor: pointer; user-select: none; }
.selectable-list li.selected { background-color: #ed4956; color: white; }
</style>
HTML;

require_once dirname(__DIR__) . '/includes/header.php';
?>
<article id="main">
    <header>
        <h2>Mouse & Keyboard Actions with ActionChains</h2>
        <p>Master low-level user interactions, drag-and-drop, sliders, hover menus, context menus, and keyboard combinations using Selenium WebDriver for Python.</p>
    </header>
    <section class="wrapper style5">
        <div class="inner">

            <!-- 1. MOUSE HOVER DEMO -->
            <div class="page-section">
                <h3>🖱️ Mouse Hover (move_to_element)</h3>
                <p>Hover over elements to reveal dynamic tooltips and sub-menus.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Hover Menu</h4>
                        <div class="hover-container" id="hoverMenuContainer">
                            <button type="button" class="button small" id="hoverDropdownBtn">Hover Over Me (Menu)</button>
                            <div class="hover-menu" id="hoverMenuContent">
                                <a href="#option1" id="menuItem1" style="display:block; padding: 5px 0;">Option 1</a>
                                <a href="#option2" id="menuItem2" style="display:block; padding: 5px 0;">Option 2</a>
                                <a href="#option3" id="menuItem3" style="display:block; padding: 5px 0;">Option 3</a>
                            </div>
                        </div>
                        <div class="code-info">
                            <code>actions.move_to_element(menu_element).perform()</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Hover Tooltip</h4>
                        <div class="hover-container" id="tooltipContainer">
                            <span class="tooltip-target" id="tooltipTrigger">Hover for Tooltip</span>
                            <span class="custom-tooltip" id="dynamicTooltip">ActionChains Hover Tooltip!</span>
                        </div>
                        <div class="code-info">
                            <code>actions.move_to_element(tooltip_element).perform()</code>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. SLIDER & CLICK AND HOLD -->
            <div class="page-section">
                <h3>🎚️ Slider & Click and Hold (move_by_offset)</h3>
                <p>Simulate clicking, dragging along an axis, and releasing mouse buttons.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Standard Range Slider</h4>
                        <div class="field">
                            <label for="rangeSlider">Range Slider</label>
                            <input type="range" id="rangeSlider" name="rangeSlider" min="0" max="100" value="20" oninput="document.getElementById('sliderVal').innerText = this.value">
                            <p>Slider Value: <strong><span id="sliderVal">20</span></strong></p>
                        </div>
                        <div class="code-info">
                            <code>actions.click_and_hold(slider).move_by_offset(50, 0).release().perform()</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Custom Drag Slider</h4>
                        <div class="slider-track" id="sliderTrack">
                            <div class="slider-thumb" id="customSliderThumb"></div>
                        </div>
                        <p>Custom Offset Position: <strong><span id="customSliderVal">0</span>px</strong></p>
                        <div class="code-info">
                            <code>actions.click_and_hold(thumb).move_by_offset(100, 0).release().perform()</code>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. DRAG AND DROP -->
            <div class="page-section">
                <h3>🔄 Drag and Drop (drag_and_drop)</h3>
                <p>Drag source items into target droppable zones.</p>
                <div class="feature-card">
                    <div class="flex items-center gap-4">
                        <div class="drag-box" id="draggableItem" draggable="true">Drag Me</div>
                        <div class="drop-zone" id="droppableTarget">Drop Here</div>
                    </div>
                    <p id="dragDropStatus" class="mt-2 font-bold" style="color: #ed4956;">Status: Waiting for action...</p>
                    <div class="code-info">
                        <code>actions.drag_and_drop(source, target).perform()</code>
                    </div>
                </div>
            </div>

            <!-- 4. RIGHT CLICK & DOUBLE CLICK -->
            <div class="page-section">
                <h3>🖱️ Right Click (Context Menu) & Double Click</h3>
                <p>Trigger right-click context menus and double-click events.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Context Menu</h4>
                        <button type="button" id="contextClickArea" class="button">Right Click Me</button>

                        <ul id="customContextMenu" class="context-menu">
                            <li id="menuEdit" onclick="setActionResult('Context Action: Edit Clicked')">Edit</li>
                            <li id="menuCopy" onclick="setActionResult('Context Action: Copy Clicked')">Copy</li>
                            <li id="menuDelete" onclick="setActionResult('Context Action: Delete Clicked')">Delete</li>
                        </ul>
					</div>
					<div class="feature-card">
                        <h4>Double Click</h4>
                        <button type="button" id="doubleClickArea" class="button alt">Double Click Me</button>
                        
                    </div>
					
					<p id="clickActionResult" class="mt-2 font-bold">						
						<div class="code-info">
                            <code>actions.context_click(element).perform()</code>
                        </div></p>
                </div>
            </div>

            <!-- 5. KEYBOARD SHORTCUTS & COMBINATIONS -->
            <div class="page-section">
                <h3>⌨️ Keyboard Shortcuts & Combined Interactions</h3>
                <p>Demonstrate modifier keys (SHIFT, CONTROL/COMMAND) and multi-selection.</p>
                <div class="demo-grid">
                    <div class="feature-card">
                        <h4>Text Input with Keys</h4>
                        <div class="field">
                            <label for="keyInputSource">Source Input (Uppercase via SHIFT)</label>
                            <input type="text" id="keyInputSource" placeholder="Type text here..." />
                        </div>
                        <div class="field">
                            <label for="keyInputTarget">Target Input (Copy/Paste)</label>
                            <input type="text" id="keyInputTarget" placeholder="Pasted result will appear here..." />
                        </div>
                        <div class="code-info">
                            <code>actions.key_down(Keys.SHIFT).send_keys("text") .key_up(Keys.SHIFT).perform()</code>
                        </div>
                    </div>

                    <div class="feature-card">
                        <h4>Multi-Select List (CTRL + Click)</h4>
                        <ul class="selectable-list" id="multiSelectList">
                            <li id="item1">Item 1: Learn Selenium</li>
                            <li id="item2">Item 2: Master ActionChains</li>
                            <li id="item3">Item 3: Python Automation</li>
                            <li id="item4">Item 4: Playwright Concepts</li>
                        </ul>
                        <div class="code-info">
                            <code>actions.key_down(Keys.CONTROL).click(element) .key_up(Keys.CONTROL).perform()</code>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</article>
<?php
$extraScripts = <<<'JS'
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
JS;
require_once dirname(__DIR__) . '/includes/footer.php';
