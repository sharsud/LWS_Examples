<?php
$lwsBase = '';
$isHome = true;
$pageTitle = 'Learn with Psudo | Python, Automation & Selenium Tutorials';
$pageCanonical = 'https://www.learnwithpsudo.com/examples/';
$homeHref = 'index.php';
require_once __DIR__ . '/includes/header.php';
?>
	<article id="main" class="examples-home">
		<header>
			<h2>Automation Practice Labs</h2>
			<p>A live sandbox for practicing web element interactions with any automation tool — explore locators, forms, frames, windows, alerts, and UI actions.</p>
		</header>
		<section class="wrapper style5">
			<div class="inner">
				<section>
					<div class="examples-section-head">
						<h4 class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-purple-600 uppercase">
							<i data-lucide="layout-grid" class="w-4 h-4"></i>
							Practice Labs
						</h4>
						<span class="rounded-full bg-purple-50 px-2.5 py-0.5 text-[11px] font-bold text-purple-700 ring-1 ring-inset ring-purple-200">11 Examples</span>
					</div>

                    <div class="grid gap-6" id="examples-grid">
                        <a href="pages/webElements.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-sky-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-sky-500 to-indigo-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-sky-500 to-indigo-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="code" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-sky-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Web Elements & Locators</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Master locating elements with ID, name, class, link text, and tag names.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-sky-50 px-2 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">input</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">button</span>
                                <span class="inline-flex items-center rounded-md bg-violet-50 px-2 py-0.5 text-[11px] font-semibold text-violet-700 ring-1 ring-inset ring-violet-200">label</span>
                                <span class="inline-flex items-center rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-700 ring-1 ring-inset ring-slate-200">link</span>
                            </div>
                        </a>
                        <a href="pages/login.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-indigo-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-indigo-500 to-sky-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-indigo-500 to-sky-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="key" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Login Page</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice form filling, validations, and handling authentication alerts.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-sky-50 px-2 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">input</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">button</span>
                                <span class="inline-flex items-center rounded-md bg-amber-50 px-2 py-0.5 text-[11px] font-semibold text-amber-800 ring-1 ring-inset ring-amber-200">alert</span>
                            </div>
                        </a>
                        <a href="pages/classLocatorsdemo.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-fuchsia-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-fuchsia-500 to-violet-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-fuchsia-500 to-violet-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="hash" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-fuchsia-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">CSS Locators</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice CSS selectors, classes, IDs, and element targeting strategies.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-fuchsia-50 px-2 py-0.5 text-[11px] font-semibold text-fuchsia-700 ring-1 ring-inset ring-fuchsia-200">.class</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">#id</span>
                                <span class="inline-flex items-center rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-700 ring-1 ring-inset ring-slate-200">css</span>
                            </div>
                        </a>
                        <a href="pages/xpathdemo.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-orange-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-orange-500 to-amber-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-orange-500 to-amber-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="git-branch" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-orange-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">XPath Locators</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice absolute, relative, and advanced XPath expressions with real examples.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-orange-50 px-2 py-0.5 text-[11px] font-semibold text-orange-800 ring-1 ring-inset ring-orange-200">xpath</span>
                                <span class="inline-flex items-center rounded-md bg-sky-50 px-2 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">input</span>
                                <span class="inline-flex items-center rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-700 ring-1 ring-inset ring-slate-200">axes</span>
                            </div>
                        </a>
                        <a href="pages/relativeLoc.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-teal-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-teal-500 to-emerald-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="crosshair" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-teal-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Relative Locators</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice Playwright/Selenium 4 relative locators — above, below, left, right, and near.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-teal-50 px-2 py-0.5 text-[11px] font-semibold text-teal-700 ring-1 ring-inset ring-teal-200">relative</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">above</span>
                                <span class="inline-flex items-center rounded-md bg-violet-50 px-2 py-0.5 text-[11px] font-semibold text-violet-700 ring-1 ring-inset ring-violet-200">near</span>
                            </div>
                        </a>
                        <a href="pages/BrNavBasic.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-sky-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-sky-500 to-cyan-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-sky-500 to-cyan-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="compass" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-sky-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Browser Navigations</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice forward/back, refresh, URLs, and element states in the browser.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-sky-50 px-2 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">navigate</span>
                                <span class="inline-flex items-center rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-700 ring-1 ring-inset ring-slate-200">window</span>
                                <span class="inline-flex items-center rounded-md bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-200">state</span>
                            </div>
                        </a>
                        <a href="pages/chkboxdemo.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-emerald-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="check-square" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Radio & Checkboxes</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice radio buttons, checkboxes, and interacting with labels.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-200">checkbox</span>
                                <span class="inline-flex items-center rounded-md bg-cyan-50 px-2 py-0.5 text-[11px] font-semibold text-cyan-800 ring-1 ring-inset ring-cyan-200">radio</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">label</span>
                            </div>
                        </a>
                        <a href="pages/dropAlert.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-amber-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-amber-500 to-orange-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="alert-triangle" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-amber-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Dropdown & Alerts</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice select dropdowns and JavaScript alerts, confirms, and prompts.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-violet-50 px-2 py-0.5 text-[11px] font-semibold text-violet-700 ring-1 ring-inset ring-violet-200">select</span>
                                <span class="inline-flex items-center rounded-md bg-amber-50 px-2 py-0.5 text-[11px] font-semibold text-amber-800 ring-1 ring-inset ring-amber-200">alert</span>
                                <span class="inline-flex items-center rounded-md bg-orange-50 px-2 py-0.5 text-[11px] font-semibold text-orange-800 ring-1 ring-inset ring-orange-200">confirm</span>
                            </div>
                        </a>
                        <a href="pages/iframes.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-purple-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-purple-500 to-violet-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-purple-500 to-violet-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="layout" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-purple-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Iframes</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice switching into iframes and interacting with nested frame elements.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-0.5 text-[11px] font-semibold text-purple-700 ring-1 ring-inset ring-purple-200">iframe</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">nested</span>
                                <span class="inline-flex items-center rounded-md bg-sky-50 px-2 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">switchTo</span>
                            </div>
                        </a>
                        <a href="pages/windowsDemo.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-slate-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-slate-500 to-slate-700"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-slate-500 to-slate-700 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="copy" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-slate-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Multi Browser</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice window handles, new tabs, and switching between browser windows.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-slate-100 px-2 py-0.5 text-[11px] font-semibold text-slate-700 ring-1 ring-inset ring-slate-200">window</span>
                                <span class="inline-flex items-center rounded-md bg-sky-50 px-2 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">handle</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">switchTo</span>
                            </div>
                        </a>
                        <a href="pages/mouseKey.php" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-6 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-rose-400">
                            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-rose-500 to-pink-500"></div>
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-rose-500 to-pink-600 flex items-center justify-center text-white shadow-sm group-hover:scale-110 transition">
                                    <i data-lucide="mouse-pointer-2" class="w-5 h-5"></i>
                                </div>
                                <span class="inline-flex items-center gap-1 text-xs font-semibold text-rose-600 group-hover:translate-x-1 transition">
                                    Practice <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                                </span>
                            </div>
                            <h3 class="text-lg font-bold text-slate-900 mb-2 tracking-tight">Mouse & Keyboard</h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-4">Practice mouse hover, click, drag, and keyboard key actions.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-md bg-rose-50 px-2 py-0.5 text-[11px] font-semibold text-rose-700 ring-1 ring-inset ring-rose-200">mouse</span>
                                <span class="inline-flex items-center rounded-md bg-amber-50 px-2 py-0.5 text-[11px] font-semibold text-amber-800 ring-1 ring-inset ring-amber-200">keyboard</span>
                                <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-0.5 text-[11px] font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-200">actions</span>
                            </div>
                        </a>
                    </div>

					<div class="examples-section-head mt-16">
						<h4 class="inline-flex items-center gap-2 text-xs font-bold tracking-widest text-teal-600 uppercase">
							<i data-lucide="workflow" class="w-4 h-4"></i>
							Workflow Demo
						</h4>
						<span class="rounded-full bg-teal-50 px-2.5 py-0.5 text-[11px] font-bold text-teal-700 ring-1 ring-inset ring-teal-200">1 Demo</span>
					</div>

					<div class="grid grid--workflow" id="workflow-grid" data-testid="workflow-grid">
						<a href="WorkflowDemo/" class="group relative block rounded-2xl bg-white border-2 border-slate-200 p-8 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-teal-400">
							<div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-teal-500 to-emerald-500"></div>
							<div class="flex items-center gap-4 mb-6">
								<div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-500 to-emerald-600 flex items-center justify-center text-white shadow-md group-hover:scale-110 transition">
									<i data-lucide="workflow" class="w-7 h-7"></i>
								</div>
								<div>
									<p class="text-[11px] font-bold uppercase tracking-[0.16em] text-teal-600">End-to-End Flow</p>
									<h3 class="text-2xl font-bold text-slate-900 tracking-tight">QA Demo Shop</h3>
								</div>
							</div>
							<p class="text-slate-600 leading-relaxed mb-6">Practice multi-step user journeys in a realistic e-commerce store — perfect for building reliable end-to-end automation flows.</p>
							<div class="flex flex-wrap gap-2 mb-6">
								<span class="inline-flex items-center rounded-md bg-teal-50 px-2.5 py-0.5 text-xs font-semibold text-teal-700 ring-1 ring-inset ring-teal-200">Login</span>
								<span class="inline-flex items-center rounded-md bg-emerald-50 px-2.5 py-0.5 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-200">Products</span>
								<span class="inline-flex items-center rounded-md bg-cyan-50 px-2.5 py-0.5 text-xs font-semibold text-cyan-800 ring-1 ring-inset ring-cyan-200">Cart</span>
								<span class="inline-flex items-center rounded-md bg-sky-50 px-2.5 py-0.5 text-xs font-semibold text-sky-700 ring-1 ring-inset ring-sky-200">Checkout</span>
							</div>
							<span class="inline-flex items-center gap-2 text-sm font-semibold text-teal-600 group-hover:text-teal-700 group-hover:translate-x-1 transition">
								Open Workflow Demo <i data-lucide="arrow-right" class="w-4 h-4"></i>
							</span>
						</a>
					</div>
				</section>
			</div>
		</section>
	</article>
<?php
require_once __DIR__ . '/includes/footer.php';
?>
