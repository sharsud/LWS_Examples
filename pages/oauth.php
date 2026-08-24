<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorize Access | Single Sign-On</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-sm bg-slate-800 rounded-2xl border border-slate-700 p-6 shadow-2xl">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-700">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-sky-500 via-indigo-500 to-purple-600 p-0.5 shadow-sm group-hover:scale-105 transition transform">
                        <div class="w-full h-full bg-white rounded-[10px] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" class="w-6 h-6 text-sky-600">
                                <g fill="currentColor" fill-rule="evenodd">
                                    <path d="M 35.00 21.00 L 34.00 22.00 L 34.00 23.00 L 41.00 23.00 L 42.00 24.00 L 44.00 24.00 L 48.00 28.00 L 48.00 29.00 L 49.00 30.00 L 49.00 171.00 L 45.00 175.00 L 44.00 175.00 L 43.00 176.00 L 35.00 176.00 L 34.00 177.00 L 34.00 178.00 L 151.00 178.00 L 151.00 175.00 L 152.00 174.00 L 152.00 172.00 L 153.00 171.00 L 153.00 167.00 L 154.00 166.00 L 154.00 163.00 L 155.00 162.00 L 155.00 159.00 L 156.00 158.00 L 156.00 155.00 L 157.00 154.00 L 157.00 151.00 L 158.00 150.00 L 158.00 147.00 L 159.00 146.00 L 159.00 143.00 L 160.00 142.00 L 160.00 139.00 L 161.00 138.00 L 161.00 135.00 L 162.00 134.00 L 162.00 131.00 L 163.00 130.00 L 163.00 127.00 L 164.00 126.00 L 164.00 123.00 L 165.00 122.00 L 165.00 117.00 L 164.00 117.00 L 164.00 118.00 L 163.00 119.00 L 163.00 121.00 L 162.00 122.00 L 162.00 124.00 L 161.00 125.00 L 161.00 127.00 L 160.00 128.00 L 160.00 130.00 L 158.00 133.00 L 158.00 135.00 L 157.00 136.00 L 157.00 137.00 L 156.00 138.00 L 156.00 139.00 L 155.00 140.00 L 155.00 141.00 L 154.00 142.00 L 154.00 143.00 L 153.00 144.00 L 152.00 147.00 L 150.00 149.00 L 149.00 152.00 L 146.00 155.00 L 146.00 156.00 L 136.00 166.00 L 135.00 166.00 L 130.00 170.00 L 129.00 170.00 L 126.00 172.00 L 124.00 172.00 L 121.00 174.00 L 119.00 174.00 L 118.00 175.00 L 114.00 175.00 L 113.00 176.00 L 83.00 176.00 L 82.00 175.00 L 79.00 175.00 L 78.00 174.00 L 77.00 174.00 L 73.00 170.00 L 73.00 167.00 L 72.00 166.00 L 72.00 33.00 L 73.00 32.00 L 73.00 29.00 L 74.00 28.00 L 74.00 27.00 L 76.00 25.00 L 77.00 25.00 L 78.00 24.00 L 80.00 24.00 L 81.00 23.00 L 87.00 23.00 L 87.00 21.00 Z"></path>
                                    <path d="M 84.00 69.00 L 84.00 98.00 L 87.00 101.00 L 88.00 101.00 L 90.00 103.00 L 91.00 103.00 L 94.00 106.00 L 95.00 106.00 L 97.00 108.00 L 98.00 108.00 L 100.00 110.00 L 101.00 110.00 L 104.00 113.00 L 105.00 113.00 L 108.00 116.00 L 109.00 116.00 L 112.00 119.00 L 113.00 119.00 L 127.00 133.00 L 127.00 134.00 L 129.00 136.00 L 129.00 137.00 L 131.00 140.00 L 131.00 142.00 L 132.00 143.00 L 132.00 153.00 L 137.00 148.00 L 137.00 147.00 L 141.00 142.00 L 141.00 141.00 L 142.00 140.00 L 142.00 139.00 L 143.00 138.00 L 143.00 137.00 L 144.00 136.00 L 144.00 135.00 L 147.00 130.00 L 147.00 128.00 L 148.00 127.00 L 149.00 124.00 L 147.00 122.00 L 146.00 119.00 L 143.00 116.00 L 143.00 115.00 L 135.00 107.00 L 134.00 107.00 L 130.00 103.00 L 129.00 103.00 L 127.00 101.00 L 126.00 101.00 L 123.00 98.00 L 122.00 98.00 L 120.00 96.00 L 119.00 96.00 L 117.00 94.00 L 116.00 94.00 L 114.00 92.00 L 113.00 92.00 L 111.00 90.00 L 110.00 90.00 L 108.00 88.00 L 107.00 88.00 L 105.00 86.00 L 104.00 86.00 L 102.00 84.00 L 101.00 84.00 L 98.00 81.00 L 97.00 81.00 L 92.00 76.00 L 91.00 76.00 L 86.00 71.00 L 86.00 70.00 L 85.00 69.00 Z"></path>
                                    <path d="M 100.00 22.00 L 99.00 23.00 L 99.00 25.00 L 100.00 26.00 L 109.00 26.00 L 110.00 27.00 L 113.00 27.00 L 114.00 28.00 L 116.00 28.00 L 117.00 29.00 L 120.00 30.00 L 122.00 32.00 L 123.00 32.00 L 126.00 35.00 L 127.00 35.00 L 131.00 39.00 L 131.00 40.00 L 134.00 43.00 L 134.00 44.00 L 136.00 46.00 L 136.00 47.00 L 138.00 50.00 L 138.00 52.00 L 140.00 55.00 L 140.00 58.00 L 141.00 59.00 L 141.00 63.00 L 142.00 64.00 L 142.00 72.00 L 143.00 73.00 L 144.00 73.00 L 144.00 24.00 L 143.00 24.00 L 142.00 25.00 L 142.00 29.00 L 139.00 32.00 L 130.00 32.00 L 129.00 31.00 L 128.00 31.00 L 127.00 30.00 L 126.00 30.00 L 125.00 29.00 L 124.00 29.00 L 123.00 28.00 L 122.00 28.00 L 117.00 25.00 L 115.00 25.00 L 114.00 24.00 L 112.00 24.00 L 111.00 23.00 L 107.00 23.00 L 106.00 22.00 Z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                <span class="font-semibold text-sm text-slate-200">AuthNode SSO</span>
            </div>
            <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 font-medium">OAuth 2.0</span>
        </div>

        <!-- Initial Login View -->
        <div id="loginView">
            <h2 class="text-lg font-bold text-white mb-1">Sign in to Sandbox</h2>
            <p class="text-xs text-slate-400 mb-6">Choose an account to continue to application.</p>

            <form id="authForm" onsubmit="handleLogin(event)" class="space-y-4">
                <div>
                    <label for="userEmail" class="block text-xs font-medium text-slate-300 mb-1">Email address</label>
                    <input type="email" id="userEmail" value="qa.tester@example.com" required 
                           class="w-full px-3 py-2 rounded-lg bg-slate-900 border border-slate-700 text-sm text-white focus:outline-none focus:border-sky-500 transition">
                </div>

                <div>
                    <label for="userPassword" class="block text-xs font-medium text-slate-300 mb-1">Password</label>
                    <input type="password" id="userPassword" value="Automation123!" required 
                           class="w-full px-3 py-2 rounded-lg bg-slate-900 border border-slate-700 text-sm text-white focus:outline-none focus:border-sky-500 transition">
                </div>

                <div class="pt-2">
                    <button type="submit" id="btnSubmitLogin" 
                            class="w-full py-2.5 px-4 rounded-lg bg-sky-500 hover:bg-sky-400 text-slate-950 font-semibold text-sm transition shadow-lg shadow-sky-500/20 flex items-center justify-center gap-2">
                        <span>Authorize & Sign In</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Authenticating / Spinner State -->
        <div id="loadingView" class="hidden text-center py-8">
            <div class="w-10 h-10 border-4 border-sky-500 border-t-transparent rounded-full animate-spin mx-auto mb-4"></div>
            <p class="text-sm font-medium text-white" id="statusMessage">Authenticating session...</p>
            <p class="text-xs text-slate-400 mt-1">Exchanging security tokens</p>
        </div>

        <!-- Auth Success View -->
        <div id="successView" class="hidden text-center py-6">
            <div class="w-12 h-12 bg-emerald-500/10 text-emerald-400 rounded-full flex items-center justify-center mx-auto mb-3 border border-emerald-500/20">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h3 class="text-base font-bold text-white mb-1">Authentication Success</h3>
            <p class="text-xs text-slate-400 mb-4">Closing window and returning token...</p>
            <div id="authToken" class="text-[11px] font-mono bg-slate-900 p-2 rounded border border-slate-700 text-slate-400 break-all">
                bearer_token_qa_8f93a21b
            </div>
        </div>
    </div>

    <script>
    function handleLogin(e) {
        e.preventDefault();
        document.getElementById('loginView').classList.add('hidden');
        document.getElementById('loadingView').classList.remove('hidden');

        // Simulate network delay for OAuth grant
        setTimeout(() => {
            document.getElementById('loadingView').classList.add('hidden');
            document.getElementById('successView').classList.remove('hidden');
            
            // Auto close window after successful auth exchange
            setTimeout(() => {
                if (window.opener && !window.opener.closed) {
                    window.opener.postMessage({ status: 'AUTH_SUCCESS', token: 'bearer_token_qa_8f93a21b' }, '*');
                }
                window.close();
            }, 1200);
        }, 1500);
    }
    </script>
</body>
</html>