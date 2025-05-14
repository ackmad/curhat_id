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
</style>

<div id="navbar">
    <ul>
        <li><a href="/">Rumah</a></li>
        <li><a href="/curhat-dulu-yuk">Curhat Dulu yuk</a></li>
        <li><a href="/intip-cerita-orang">Intip Cerita Orang</a></li>
        <li><a href="/kenalin-kami">Kenali Kami</a></li>
        <li><a href="/ada-saran">Ada Saran?</a></li>
    </ul>
</div>
