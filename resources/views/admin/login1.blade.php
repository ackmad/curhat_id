<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background-color: #121212;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    #form {
        width: 300px;
        padding: 25px;
        background-color: #161616;
        box-shadow: 0px 15px 60px #00FF7F;
        outline: 1px solid #2b9962;
        border-radius: 10px;
        position: relative;
    }

    #form-body {
        width: 100%;
    }

    #welcome-lines {
        text-align: center;
        line-height: 1.2;
        margin-bottom: 30px;
    }

    #welcome-line-1 {
        color: #00FF7F;
        font-weight: 600;
        font-size: 32px;
    }

    #welcome-line-2 {
        color: #ffffff;
        font-size: 16px;
        margin-top: 10px;
    }

    #input-area {
        margin-top: 20px;
    }

    .form-inp {
        margin-bottom: 15px;
        padding: 10px 15px;
        border: 1px solid #e3e3e3;
        border-radius: 8px;
        background: transparent;
    }

    .form-inp input {
        width: 100%;
        background: none;
        border: none;
        outline: none;
        color: #00FF7F;
        font-size: 13.5px;
    }

    .form-inp:focus-within {
        border-color: #00FF7F;
    }

    #submit-button-cvr {
        margin-top: 10px;
    }

    #submit-button {
        width: 100%;
        background-color: transparent;
        color: #00FF7F;
        font-weight: bold;
        font-size: 14px;
        border: 1px solid #00FF7F;
        border-radius: 8px;
        padding: 12px 0;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    #submit-button:hover {
        background-color: #00FF7F;
        color: #161616;
    }

    #forgot-pass {
        text-align: center;
        margin-top: 10px;
    }

    #forgot-pass a {
        color: #868686;
        font-size: 12px;
        text-decoration: none;
    }

    #bar {
        width: 28px;
        height: 8px;
        background-color: #00FF7F;
        border-radius: 10px;
        margin: 25px auto 0;
        position: relative;
    }

    #bar::before,
    #bar::after {
        content: "";
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: #ececec;
        border-radius: 50%;
        top: 0;
    }

    #bar::before {
        left: -20px;
    }

    #bar::after {
        right: -20px;
    }
</style>

<div id="form-ui">
    <form action="" method="post" id="form">
        <div id="form-body">
            <div id="welcome-lines">
                <div id="welcome-line-1">Spotify</div>
                <div id="welcome-line-2">Welcome Back, Loyd</div>
            </div>
            <div id="input-area">
                <div class="form-inp">
                    <input placeholder="Email Address" type="text" />
                </div>
                <div class="form-inp">
                    <input placeholder="Password" type="password" />
                </div>
            </div>
            <div id="submit-button-cvr">
                <button id="submit-button" type="submit">Login</button>
            </div>
            <div id="forgot-pass">
                <a href="#">Forgot password?</a>
            </div>
            <div id="bar"></div>
        </div>
    </form>
</div>
