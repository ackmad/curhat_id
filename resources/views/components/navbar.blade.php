<style>
#navbar {
    background-color: #3F4C3F;
    display: flex;
    width: 80%;
    justify-content: center;
    padding: 15px 20px;
    border-radius: 0px 0px 50px 50px;
    position: fixed;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    z-index: 5;
    animation: navbarFadeDown 1.2s cubic-bezier(.77,0,.18,1) both;
    box-shadow: 0 8px 32px 0 rgba(63,76,63,0.13);
}

#navbar ul {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 40px;
    padding: 0;
    margin: 0;
}

#navbar ul li {
    list-style: none;
    opacity: 0;
    transform: translateY(-30px) scale(0.95);
    animation: navbarItemFadeIn 0.7s cubic-bezier(.77,0,.18,1) forwards;
}
#navbar ul li:nth-child(1) { animation-delay: 0.3s; }
#navbar ul li:nth-child(2) { animation-delay: 0.45s; }
#navbar ul li:nth-child(3) { animation-delay: 0.6s; }
#navbar ul li:nth-child(4) { animation-delay: 0.75s; }
#navbar ul li:nth-child(5) { animation-delay: 0.9s; }

#navbar ul li a {
    text-decoration: none;
    color: #ffffffb3;
    font-size: 18px;
    padding: 10px 0;
    font-family: "McLaren", sans-serif;
    position: relative;
    transition: color 0.3s cubic-bezier(.77,0,.18,1), text-shadow 0.3s;
    letter-spacing: 1px;
    display: inline-block;
}

#navbar ul li a::after {
    content: "";
    display: block;
    height: 3px;
    width: 0;
    background: linear-gradient(90deg, #FFCA6C 60%, #C6DEBF 100%);
    border-radius: 2px;
    transition: width 0.35s cubic-bezier(.77,0,.18,1);
    margin-top: 3px;
}

#navbar ul li a:hover, #navbar ul li a:focus {
    color: #FFCA6C;
    text-shadow: 0 2px 16px #FFCA6C55, 0 0px 2px #fff;
}
#navbar ul li a:hover::after, #navbar ul li a:focus::after {
    width: 100%;
}

@keyframes navbarFadeDown {
    from { opacity: 0; transform: translateX(-50%) translateY(-60px) scale(0.98);}
    to   { opacity: 1; transform: translateX(-50%) translateY(0) scale(1);}
}
@keyframes navbarItemFadeIn {
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.nav-logo {
    height: 36px;
    margin-right: 24px;
}

.dropbtn {
    display: none;
    background: #FFCA6C;
    color: #3F4C3F;
    border: none;
    border-radius: 8px;
    padding: 8px 18px;
    font-size: 16px;
    font-family: "McLaren", sans-serif;
    cursor: pointer;
    margin-left: 24px;
    transition: background 0.2s;
}
.dropbtn:hover {
    background: #ffe6fa;
}

.dropdown {
    display: none;
    position: absolute;
    top: 60px;
    right: 30px;
    background: #fff;
    min-width: 180px;
    box-shadow: 0 8px 32px 0 rgba(63,76,63,0.13);
    border-radius: 16px;
    z-index: 99;
    overflow: hidden;
    transition: transform 0.5s cubic-bezier(.77,0,.18,1);
}
.dropdown-content a {
    color: #3F4C3F;
    padding: 14px 24px;
    text-decoration: none;
    display: block;
    font-family: "McLaren", sans-serif;
    font-size: 17px;
    border-bottom: 1px solid #f3f3f3;
    transition: background 0.2s;
}
.dropdown-content a:last-child { border-bottom: none; }
.dropdown-content a:hover {
    background: #FFCA6C33;
}

@media (max-width: 900px) {
    #navbar ul {
        display: none;
    }
    .dropbtn {
        display: block;
    }
}
</style>

<div id="navbar" class="flex" style="align-items:center;">
    {{-- <img src="{{ asset('images/logo-navbar.svg') }}" alt="Logo" class="nav-logo"> --}}
    <ul>
        <li><a href="/">Rumah</a></li>
        <li><a href="/curhat-dulu-yuk">Curhat Dulu yuk</a></li>
        <li><a href="{{ route('intip-cerita') }}">Intip Cerita Orang</a></li>
        <li><a href="/kenalin-kami">Kenali Kami</a></li>
        <li><a href="/ada-saran">Ada Saran?</a></li>
    </ul>
    <button class="dropbtn" id="dropbtn">Menu</button>
    <div class="dropdown" id="dropdown">
        <div class="dropdown-content">
            <a href="/">Rumah</a>
            <a href="/curhat-dulu-yuk">Curhat Dulu yuk</a>
            <a href="{{ route('intip-cerita') }}">Intip Cerita Orang</a>
            <a href="/kenalin-kami">Kenali Kami</a>
            <a href="/ada-saran">Ada Saran?</a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropbtn = document.getElementById('dropbtn');
    const dropdown = document.getElementById('dropdown');

    dropbtn.addEventListener('click', function(e) {
        e.stopPropagation();
        if (dropdown.style.display === 'block') {
            dropdown.style.transform = 'translateX(-500%)';
            setTimeout(() => { dropdown.style.display = 'none'; }, 500);
        } else {
            dropdown.style.display = 'block';
            setTimeout(() => { dropdown.style.transform = 'translateX(0)'; }, 10);
        }
    });

    document.addEventListener('click', function(event) {
        if (!dropdown.contains(event.target) && !dropbtn.contains(event.target)) {
            dropdown.style.transform = 'translateX(-500%)';
            setTimeout(() => { dropdown.style.display = 'none'; }, 500);
        }
    });
});
</script>
