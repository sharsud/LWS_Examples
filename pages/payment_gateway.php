<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Checkout Gateway</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-slate-900 rounded-2xl border border-slate-800 p-6 shadow-2xl">
        <!-- Gateway Header -->
        <div class="flex items-center justify-between pb-4 border-b border-slate-800 mb-5">
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
                <span class="font-semibold text-sm text-slate-200">PaySecure Sandbox</span>
            </div>
            <div class="text-right">
                <span class="block text-[10px] text-slate-400 uppercase tracking-wider font-semibold">Test Amount</span>
                <span class="text-base font-bold text-emerald-400">$49.99 USD</span>
            </div>
        </div>

        <!-- Step 1: Payment Form -->
        <div id="paymentFormView">
            <form id="payForm" onsubmit="processPayment(event)" class="space-y-4">
                <div>
                    <label for="cardNumber" class="block text-xs font-medium text-slate-400 mb-1">Card Number</label>
                    <input type="text" id="cardNumber" value="4532 •••• •••• 8892" required 
                           class="w-full px-3 py-2 rounded-lg bg-slate-950 border border-slate-800 text-sm font-mono text-white focus:outline-none focus:border-indigo-500 transition">
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div>
                        <label for="cardExpiry" class="block text-xs font-medium text-slate-400 mb-1">Expiry Date</label>
                        <input type="text" id="cardExpiry" value="12/28" placeholder="MM/YY" required 
                               class="w-full px-3 py-2 rounded-lg bg-slate-950 border border-slate-800 text-sm font-mono text-white focus:outline-none focus:border-indigo-500 transition">
                    </div>
                    <div>
                        <label for="cardCvc" class="block text-xs font-medium text-slate-400 mb-1">CVC / CVV</label>
                        <input type="password" id="cardCvc" value="321" maxlength="4" required 
                               class="w-full px-3 py-2 rounded-lg bg-slate-950 border border-slate-800 text-sm font-mono text-white focus:outline-none focus:border-indigo-500 transition">
                    </div>
                </div>

                <div class="pt-3 flex gap-2">
                    <button type="button" id="btnCancelPayment" onclick="cancelPayment()" 
                            class="w-1/3 py-2.5 px-3 rounded-lg bg-slate-800 hover:bg-slate-700 text-slate-300 font-medium text-xs transition">
                        Cancel
                    </button>
                    <button type="submit" id="btnPayNow" 
                            class="w-2/3 py-2.5 px-4 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-xs transition shadow-lg shadow-indigo-600/20 flex items-center justify-center gap-2">
                        <span>Pay $49.99</span>
                    </button>
                </div>
            </form>
        </div>

        <!-- Step 2: 3D Secure Verification / Processing -->
        <div id="processingView" class="hidden text-center py-6">
            <div class="w-12 h-12 border-4 border-indigo-500 border-t-transparent rounded-full animate-spin mx-auto mb-4"></div>
            <h4 class="text-sm font-semibold text-white">Contacting Card Issuer...</h4>
            <p class="text-xs text-slate-400 mt-1">Verifying 3D Secure 2.0 transaction</p>
        </div>

        <!-- Step 3: Transaction Result -->
        <div id="resultView" class="hidden text-center py-4">
            <div id="resultIcon" class="w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3"></div>
            <h3 id="resultTitle" class="text-base font-bold text-white mb-1"></h3>
            <p id="resultDesc" class="text-xs text-slate-400 mb-4"></p>
            <span id="txId" class="text-[10px] font-mono bg-slate-950 px-2 py-1 rounded text-slate-500 border border-slate-800">
                TXN_994827104928
            </span>
        </div>
    </div>

    <script>
    function processPayment(e) {
        e.preventDefault();
        document.getElementById('paymentFormView').classList.add('hidden');
        document.getElementById('processingView').classList.remove('hidden');

        setTimeout(() => {
            document.getElementById('processingView').classList.add('hidden');
            const resultView = document.getElementById('resultView');
            const icon = document.getElementById('resultIcon');
            const title = document.getElementById('resultTitle');
            const desc = document.getElementById('resultDesc');
            
            resultView.classList.remove('hidden');
            icon.className = "w-12 h-12 bg-emerald-500/10 text-emerald-400 rounded-full flex items-center justify-center mx-auto mb-3 border border-emerald-500/20";
            icon.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>';
            title.innerText = "Payment Approved";
            desc.innerText = "Transaction complete. Closing window...";

            setTimeout(() => {
                if (window.opener && !window.opener.closed) {
                    window.opener.postMessage({ status: 'PAYMENT_SUCCESS', txnId: 'TXN_994827104928' }, '*');
                }
                window.close();
            }, 1500);
        }, 2000);
    }

    function cancelPayment() {
        if (window.opener && !window.opener.closed) {
            window.opener.postMessage({ status: 'PAYMENT_CANCELLED' }, '*');
        }
        window.close();
    }
    </script>
</body>
</html>