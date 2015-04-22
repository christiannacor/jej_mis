<div class="wrapper">
    <table style="width: 100%;">
        <tr>
            <td valign="top" class="left-container" id="mobile-navigation">
                <h2>Dashboard</h2>
                <div class="navigation-mobi">
                    <select class="option-mobi" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <option value="">Select a Task..</option>
                        <option value="">-------------------------</option>
                        <option value="<?php echo URL; ?>dashboard/reports">View Reports</option>
                        <option value="<?php echo URL; ?>som">Sales and Order Mgt.</option>
                        <option value="<?php echo URL; ?>assets">Asset Management</option>
                        <option value="<?php echo URL; ?>crm">Cust. Relations</option>
                        <option value="">-------------------------</option>
                        <option value="<?php echo URL; ?>products">Manage Products</option>
                        <option value="">-------------------------</option>
                        <option value="<?php echo URL; ?>accout">Account Sett.</option>
                        <option value="<?php echo URL; ?>settings">System Pref.</option>
                    </select>
                </div>
            </td>
            <td valign="top" class="left-container" id="sub-navigation">
                <h2>Dashboard</h2>
                <h3>Tasks</h3>
                <ul>
                    <li><a href="<?php echo URL; ?>dashboard/reports" onclick="" data-transition="fade">Report Summary</a></li>
                    <li><a href="<?php echo URL; ?>som" onclick="" data-transition="fade">Sales and Order Management</a></li>
                    <li><a href="<?php echo URL; ?>assets" onclick="" data-transition="fade">Asset Management</a></li>
                    <li><a href="<?php echo URL; ?>crm" onclick="" data-transition="fade">Customer Relations</a></li>
                    <li><a href="<?php echo URL; ?>products" onclick="" data-transition="fade">Manage Products</a></li>
                </ul>
                <h3>Options</h3>
                <ul>
                <li><a href="<?php echo URL; ?>account" onclick="">Account Dashboard</a></li>
                <li><a href="<?php echo URL; ?>settings" onclick="">System Preferences</a></li>
                </ul>
            </td>
            <td valign="top" style="width: 2px;" class="space"></td>    
            <td valign="top" class="right-container">
                <h2>Management Information System Report</h2>
                <?php $this->renderFeedbackMessages(); ?>
                <span class="error_text">Sorry, this section is still under construction for now.</span><br /><br />
                <div class="container_table">
                    <div class="container_column">
                        <h3><i class="picol_label"></i>Products</h3><hr />
                        <h4>Total Products Available - <?php echo $amount_of_products; ?></h4>
                    </div>
                    <div class="container_column">
                        <h3><i class="picol_user_full"></i>Customers</h3><hr />
                        <h4>No Customers Defined</h4>
                    </div>
                    <div class="container_column">
                        <h3><i class="picol_user_full"></i>Customers</h3><hr />
                        <h4>No Customers Defined</h4>
                    </div>
                    <div class="container_column">
                        <h3><i class="picol_user_full"></i>Customers</h3><hr />
                        <h4>No Customers Defined</h4>
                    </div>
                    <div class="container_column">
                        <h3><i class="picol_user_full"></i>Customers</h3><hr />
                        <h4>No Customers Defined</h4>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>

