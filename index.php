<?php
$lwsBase = '';
$isHome = true;
$pageTitle = 'Learn with Psudo | Python, Automation & Selenium Tutorials';
$pageCanonical = 'https://examples.learnwithpsudo.com/';
$homeHref = 'index.php';
require_once __DIR__ . '/includes/header.php';
?>
	<article id="main" class="examples-home">
		<header>
			<h2>Automation Demo </h2>
			<p>Use this as a practice area for web test automation</p>
		</header>
		<section class="wrapper style5">
			<div class="inner">
				<section>
					<div class="project-heroes md:grid-cols-3 gap-5 mb-10" data-testid="project-heroes">
						<a class="project-hero group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-indigo-200 transition" href="#examples-grid" data-testid="project-hero-selenium">
							<span class="project-hero__eyebrow text-[11px] font-semibold uppercase tracking-[0.16em] text-indigo-500">Project 01</span>
							<h3 class="project-hero__title mt-2 text-lg font-semibold text-slate-900">Selenium Sandbox</h3>
							<p class="project-hero__copy mt-2 text-sm text-slate-500">Practice locators, forms, alerts, and browser APIs in a stable demo lab.</p>
							<span class="project-hero__cta mt-4 inline-flex text-sm font-semibold text-indigo-600">Open examples</span>
						</a>
						<a class="project-hero group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-teal-200 transition" href="WorkflowDemo/" data-testid="project-hero-workflow">
							<span class="project-hero__eyebrow text-[11px] font-semibold uppercase tracking-[0.16em] text-teal-600">Project 02</span>
							<h3 class="project-hero__title mt-2 text-lg font-semibold text-slate-900">Workflow Demo</h3>
							<p class="project-hero__copy mt-2 text-sm text-slate-500">Walk through multi-step user journeys and end-to-end automation scenarios.</p>
							<span class="project-hero__cta mt-4 inline-flex text-sm font-semibold text-teal-700">Open workflow</span>
						</a>
						<a class="project-hero group rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-orange-200 transition" href="https://www.learnwithpsudo.com/" target="_blank" rel="noopener noreferrer" data-testid="project-hero-academy">
							<span class="project-hero__eyebrow text-[11px] font-semibold uppercase tracking-[0.16em] text-orange-600">Project 03</span>
							<h3 class="project-hero__title mt-2 text-lg font-semibold text-slate-900">Learn With Psudo</h3>
							<p class="project-hero__copy mt-2 text-sm text-slate-500">Python, automation, and Selenium tutorials that pair with this practice site.</p>
							<span class="project-hero__cta mt-4 inline-flex text-sm font-semibold text-orange-600">Visit academy</span>
						</a>
					</div>

					<h4>list of examples</h4>

                    <div class="grid" id="examples-grid">
                        <div class="grid-item item1 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Multiple web elements using different locators
                                <div class="element-pills">
                                    <code class="rounded-md bg-sky-50 px-2 py-0.5 font-mono text-[11px] font-medium text-sky-700 ring-1 ring-inset ring-sky-200">input</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">button</code>
                                    <code class="rounded-md bg-violet-50 px-2 py-0.5 font-mono text-[11px] font-medium text-violet-700 ring-1 ring-inset ring-violet-200">label</code>
                                    <code class="rounded-md bg-slate-100 px-2 py-0.5 font-mono text-[11px] font-medium text-slate-700 ring-1 ring-inset ring-slate-200">a</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/webElements.php" >Web Elements & Locators</a>
                            </div>
                        </div>
                        <div class="grid-item item2 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use login page to fill fields and handle alert
                                <div class="element-pills">
                                    <code class="rounded-md bg-sky-50 px-2 py-0.5 font-mono text-[11px] font-medium text-sky-700 ring-1 ring-inset ring-sky-200">input</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">button</code>
                                    <code class="rounded-md bg-amber-50 px-2 py-0.5 font-mono text-[11px] font-medium text-amber-800 ring-1 ring-inset ring-amber-200">alert</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/login.php" >Login Page</a>
                            </div>
                        </div>
                        <div class="grid-item item3 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content">Use this to practice demo on class locators
                                <div class="element-pills">
                                    <code class="rounded-md bg-fuchsia-50 px-2 py-0.5 font-mono text-[11px] font-medium text-fuchsia-700 ring-1 ring-inset ring-fuchsia-200">.class</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">button</code>
                                    <code class="rounded-md bg-slate-100 px-2 py-0.5 font-mono text-[11px] font-medium text-slate-700 ring-1 ring-inset ring-slate-200">css selector</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/classLocatorsdemo.php" >CSS Locators</a>
                            </div>
                        </div>
                        <div class="grid-item item4 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use this to practice demo on xpath locators
                                <div class="element-pills">
                                    <code class="rounded-md bg-orange-50 px-2 py-0.5 font-mono text-[11px] font-medium text-orange-800 ring-1 ring-inset ring-orange-200">xpath</code>
                                    <code class="rounded-md bg-sky-50 px-2 py-0.5 font-mono text-[11px] font-medium text-sky-700 ring-1 ring-inset ring-sky-200">input</code>
                                    <code class="rounded-md bg-slate-100 px-2 py-0.5 font-mono text-[11px] font-medium text-slate-700 ring-1 ring-inset ring-slate-200">a</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/xpathdemo.php" >Xpath Locators</a>
                            </div>
                        </div>
                        <div class="grid-item item5 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content">Use this to practice demo on relative locators
                                <div class="element-pills">
                                    <code class="rounded-md bg-teal-50 px-2 py-0.5 font-mono text-[11px] font-medium text-teal-700 ring-1 ring-inset ring-teal-200">relative locator</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">button</code>
                                    <code class="rounded-md bg-violet-50 px-2 py-0.5 font-mono text-[11px] font-medium text-violet-700 ring-1 ring-inset ring-violet-200">near / above</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/relativeLoc.php" >Relative Locators</a>
                            </div>
                        </div>
                        <div class="grid-item item6 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use this to practice demo on Browser Navigations and element state
                                <div class="element-pills">
                                    <code class="rounded-md bg-sky-50 px-2 py-0.5 font-mono text-[11px] font-medium text-sky-700 ring-1 ring-inset ring-sky-200">navigation</code>
                                    <code class="rounded-md bg-slate-100 px-2 py-0.5 font-mono text-[11px] font-medium text-slate-700 ring-1 ring-inset ring-slate-200">window</code>
                                    <code class="rounded-md bg-emerald-50 px-2 py-0.5 font-mono text-[11px] font-medium text-emerald-700 ring-1 ring-inset ring-emerald-200">enabled / displayed</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/BrNavBasic.php" >Browser Navigations</a>
                            </div>
                        </div>
                        <div class="grid-item item7 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use this to practice demo on Radio Buttons and checkboxes
                                <div class="element-pills">
                                    <code class="rounded-md bg-emerald-50 px-2 py-0.5 font-mono text-[11px] font-medium text-emerald-700 ring-1 ring-inset ring-emerald-200">checkbox</code>
                                    <code class="rounded-md bg-cyan-50 px-2 py-0.5 font-mono text-[11px] font-medium text-cyan-800 ring-1 ring-inset ring-cyan-200">radio</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">label</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/chkboxdemo.php" >Elements-Radio & Checkboxes</a>
                            </div>
                        </div>
                        <div class="grid-item item8 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use this to practice demo on Dropdown and alerts 
                                <div class="element-pills">
                                    <code class="rounded-md bg-violet-50 px-2 py-0.5 font-mono text-[11px] font-medium text-violet-700 ring-1 ring-inset ring-violet-200">select</code>
                                    <code class="rounded-md bg-amber-50 px-2 py-0.5 font-mono text-[11px] font-medium text-amber-800 ring-1 ring-inset ring-amber-200">alert</code>
                                    <code class="rounded-md bg-orange-50 px-2 py-0.5 font-mono text-[11px] font-medium text-orange-800 ring-1 ring-inset ring-orange-200">confirm</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/dropAlert.php" >Dropdown & Alerts</a>
                            </div>
                        </div>
						<div class="grid-item item9 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use this to practice on Iframes and elements interations
                                <div class="element-pills">
                                    <code class="rounded-md bg-purple-50 px-2 py-0.5 font-mono text-[11px] font-medium text-purple-700 ring-1 ring-inset ring-purple-200">iframe</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">nested frame</code>
                                    <code class="rounded-md bg-sky-50 px-2 py-0.5 font-mono text-[11px] font-medium text-sky-700 ring-1 ring-inset ring-sky-200">input</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/iframes.php" >Iframes</a>
                            </div>
                        </div>
                        <div class="grid-item item10 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use this to practice on Window handles/switching interations
                                <div class="element-pills">
                                    <code class="rounded-md bg-slate-100 px-2 py-0.5 font-mono text-[11px] font-medium text-slate-700 ring-1 ring-inset ring-slate-200">window</code>
                                    <code class="rounded-md bg-sky-50 px-2 py-0.5 font-mono text-[11px] font-medium text-sky-700 ring-1 ring-inset ring-sky-200">handle</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">switchTo</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/windowsDemo.php" >Multi Browser</a>
                            </div>
                        </div>
                        <div class="grid-item item1 group hover:-translate-y-0.5 hover:shadow-md hover:border-indigo-200 transition">
                            <div class="content"> Use this to practice on mouse and Keyboard actions
                                <div class="element-pills">
                                    <code class="rounded-md bg-rose-50 px-2 py-0.5 font-mono text-[11px] font-medium text-rose-700 ring-1 ring-inset ring-rose-200">mouse</code>
                                    <code class="rounded-md bg-amber-50 px-2 py-0.5 font-mono text-[11px] font-medium text-amber-800 ring-1 ring-inset ring-amber-200">keyboard</code>
                                    <code class="rounded-md bg-indigo-50 px-2 py-0.5 font-mono text-[11px] font-medium text-indigo-700 ring-1 ring-inset ring-indigo-200">actions</code>
                                </div>
                            </div>
                            <div class="overlay">
                                <a href="pages/mouseKey.php" >Mouse & Keyboard</a>
                            </div>
                        </div>
                    </div>
            
                </section>		
			</div>
		</section>
	</article>
<?php
require_once __DIR__ . '/includes/footer.php';
?>
