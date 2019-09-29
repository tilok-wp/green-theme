<?php 
// Menu function
function green_theme_falback_menu (){ ?>
    <ul>
    <li class="current-menu-item"><a href="index.html">Home</a></li>
    <li class="has-children">
        <a href="javascript:void(0);">Services</a>
        <ul class="sub-menu">
        <li><a href="">Service List</a></li>
        <li><a href="">Service List</a></li>
        <li><a href="">Service List</a></li>
        <li class="has-children">
            <a href="javascript:void(0);">Services</a>
            <ul class="sub-menu">
            <li><a href="">Service List</a></li>
            <li><a href="">Service List</a></li>
            <li><a href="">Service List</a></li>
            <li><a href="">Service List</a></li>
            </ul>
        </li>
        <li><a href="">Service List</a></li>

        </ul>
    </li>
    <li><a href="portfolio.html">Portfolio</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="blog.html">Blog</a></li>
    <li><a href="contact.html">Contact</a></li>
    </ul>
<?php 
}