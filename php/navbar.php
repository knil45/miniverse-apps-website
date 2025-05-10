<div class="navbar">
    <a href="/">Miniverse Apps</a>

    <div class="dropdown">
        <select id="language_selector" onchange="changeLang(this.value)">
            <option value="es" <?php echo ($_SESSION['lang'] == "es") ? "selected" : ""; ?>>Español</option>
            <option value="en" <?php echo ($_SESSION['lang'] == "en") ? "selected" : ""; ?>>English</option>
        </select>
    </div>
</div>

<script>
    function changeLang(lang) {
        window.location.href = `${window.location.href}?lang=${lang}`;
    }
</script>