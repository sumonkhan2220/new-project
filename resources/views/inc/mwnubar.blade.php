<div class="container-fluid">
    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">

            <li class="has-submenu">
                <a href="{{route('pages.dashboard')}}">Dashboard</a>
            </li>

            <li class="has-submenu">
                <a href="#">Member Structure</a>
                <ul class="submenu">
                    <li><a href="{{route('registrationPersonList.page')}}">Registration Person List</a></li>
                    <li><a href="{{route('committeeList.page')}}">Committee List</a></li>
                    <li><a href="{{route('committeeFlowchart.page')}}">Committee Flowchart</a></li>
                </ul>
            </li>


            <li class="has-submenu">
                <a href="#">Financial List</a>
                <ul class="submenu">
                    <li><a href="{{route('committeeFlowchart.page')}}">Yearly Commercial Cost</a></li>
                    <li><a href="{{route('registrationPersonList.page')}}">Monthly Installment</a></li>
                    <li><a href="{{route('committeeList.page')}}">Yearly Installment</a></li>
                    <li><a href="{{route('committeeFlowchart.page')}}">Expense</a></li>
                    <li><a href="{{route('committeeFlowchart.page')}}">Bonus</a></li>
                </ul>
            </li>


            <li class="has-submenu">
                <a href="#">Rules Regulation</a>
                <ul class="submenu">
                    <li><a href="{{route('registrationPersonList.page')}}">Installment Rules</a></li>
                    <li><a href="{{route('committeeFlowchart.page')}}">Structural</a></li>
                </ul>
            </li>


            <li class="has-submenu">
                <a href="#">Festival Gallery</a>
                <ul class="submenu">
                    <li><a href="{{route('committeeFlowchart.page')}}">Festival Blog</a></li>
                    <li><a href="{{route('registrationPersonList.page')}}">Slider</a></li>
                </ul>
            </li>


            <li class="has-submenu">
                <a href="#">Notice</a>
                <ul class="submenu">
                    <li><a href="{{route('committeeFlowchart.page')}}">Global Notice</a></li>
                    <li><a href="{{route('registrationPersonList.page')}}">User Notice</a></li>
                </ul>
            </li>


            <li class="has-submenu">
                <a href="{{route('committeeFlowchart.page')}}">Setting</a>
            </li>

            <li class="has-submenu">
                <a href="#">Report</a>
                <ul class="submenu">
                    <li><a href="{{route('registrationPersonList.page')}}">Gross Balance Report</a></li>
                    <li><a href="{{route('committeeFlowchart.page')}}">Installment Report</a></li>
                    <li><a href="{{route('registrationPersonList.page')}}">Expense Report</a></li>
                </ul>
            </li>

            {{-- <li class="has-submenu">
                <a href="#">ABC</a>
                <ul class="submenu">
                        <ul class="submenu">
                            <li><a href="#">Icons</a></li>
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-feather.html">Feather Icons</a></li>
                        </ul>
                   

                    <li class="has-submenu">
                        <a href="#">Forms <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-mask.html">Form Masks</a></li>
                            <li><a href="forms-quilljs.html">Quilljs Editor</a></li>
                            <li><a href="form-x-editable.html">X Editable</a></li>
                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Tables <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                            <li><a href="tables-editable.html">Editable Tables</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Graphs <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li><a href="charts-flot.html">Flot Chart</a></li>
                            <li><a href="charts-morris.html">Morris Chart</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="charts-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Maps <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html">Calendar</a>
                    </li>

                </ul>
            </li> --}}


            {{-- <li class="has-submenu">
                <a href="#">Email
                </a>
                <ul class="submenu">
                    <li><a href="email-inbox.html">Inbox</a></li>
                    <li><a href="email-read.html">Read Email</a></li>
                    <li><a href="email-compose.html">Compose Email</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#"> Pages
                </a>

                <ul class="submenu megamenu">
                    <li>
                        <ul>
                            <li><a href="pages-starter.html">Starter Page</a></li>
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-logout.html">Logout</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                            <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-404-alt.html">Error 404-alt</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#">Galary 
                </a>
                <ul class="submenu">
                    <li><a href="extras-timeline.html">Timeline</a></li>
                    <li><a href="extras-invoice.html">Invoice</a></li>
                    <li><a href="extras-faq.html">FAQ</a></li>
                    <li><a href="extras-pricing.html">Pricing</a></li>
                    <li><a href="extras-email-template.html">Email Templates</a></li>
                </ul>
            </li> --}}

        </ul>
        <!-- End navigation menu -->

        <div class="clearfix"></div>
    </div>
    <!-- end #navigation -->
</div>