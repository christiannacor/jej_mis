<div class="container">
    <b>System Information</b><br />
    <table style="font-size: 12px; text-align: left; border-spacing: 0px;">
        <tr>
            <th>jej_ims / jccultimaCMS Version:</th>
            <td><?php echo file_get_contents(URL .'version.txt'); ?></td>
        </tr>
        <tr>
            <th>PHP Version:</th>
            <td><?php echo phpversion(); ?></td>
        </tr>
        <tr>
            <th>MySQL Version:</th>
            <td><?php ?></td>
        </tr>
        <tr>
            <th>Design:</th>
            <td>MVC (Model-View-Controller) using Modified <a href="" onclick="mini_info()">MINI</a></td>
        </tr>
        <tr>
            <th>Web Server:</th>
            <td><?php echo apache_get_version() ?></td>
        </tr>
        <tr>
            <th>Operating System:</th>
            <td><?php echo php_uname(); ?></td>
        </tr>
        <tr>
            <th>Status:</th>
            <td>Alpha</td>
        </tr>
        <tr>
            <th>Detailed Information:</th>
            <td><a href="https://github.com/jccultima123/jej_ims">https://github.com/jccultima123/jej_ims</a></td>
        </tr>
    </table>
    <br /><br /><b>Changelog</b>
    <table style="font-size: 12px;" class="exp_table">
        <tr>
            <th>Version</th>
            <th>Information</th>
            <th>Date</th>
        </tr>
        <tr>
            <td>0.1.05a</td>
            <td>
                <ul>
                    <li>Fixed product controller.. sigh (Fixes issue <a href="https://github.com/jccultima123/jej_ims/issues/2">#2</a>)</li>
                    <li>Added Login Functionality which is still unstable</li>
                    <li>Minor font changes to make it readable</li>
                    <li>Added Edit Product Page</li>
                    <li>Fixed Product Controller</li>
                    <li>Fixed Product Detail Table</li>
                    <li>Better Error Detection</li>
                    <li>Minor changes</li>
                </ul>
            </td>
            <td>Febuary 19, 2015</td>
        </tr>
        <tr>
            <td>0.1.04a</td>
            <td>
                <ul>
                    <li>Updated README.MD</li>
                    <li>Completing folder structure</li>
                    <li>Minor changes</li>
                </ul>
            </td>
            <td>Febuary 18, 2015</td>
        </tr>
        <tr>
            <td>0.1.03a</td>
            <td>
                <ul>
                    <li>Removed MIT License to make it Private</li>
                    <li>Updated README.MD</li>
                    <li>Fixed Version Information</li>
                    <li>Fixed Commits at .git</li>
                    <li>Minor changes</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>0.1.02a</td>
            <td>
                <ul>
                    <li>Initialized .git function</li>
                    <li>First Commit at .git</li>
                    <li>Compiled Product Model from Database</li>
                    <li>Minor changes</li>
                </ul>
            </td>
            <td>Febuary 17, 2015</td>
        </tr>
        <tr>
            <td>0.1.01a</td>
            <td>
                <ul>
                    <li>Modified Error Controllers</li>
                    <li>Added Error Page</li>
                    <li>Added Development Page</li>
                    <li>Minor changes</li>
                </ul>
            </td>
            <td>Febuary 16, 2015</td>
        </tr>
        <tr>
            <td>0.1a</td>
            <td>
                <ul>
                    <li>Initial Nightly Release</li>
                    <li>Created Database</li>
                    <li>Integrated MVC Basic Pattern</li>
                    <li>Modified Views</li>
                </ul>
            </td>
            <td>Febuary 15, 2015</td>
        </tr>
    </table>
    <br /><br />
    <span class="show_button" tabindex="0">Show More</span>
    <span class="hide_button" tabindex="0">Hide</span>
    <br /><br />
    Detailed Commits/Changes at <a href="https://github.com/jccultima123/jej_ims/commits/">here</a>.
    <br /><br /><a href="<?php echo URL; ?>" class="back">&larr; Go Back</a>
</div>

