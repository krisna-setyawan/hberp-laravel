<div class="sidebar-body pt-0 data-scrollbar">
    <div class="sidebar-list">
        <!-- Sidebar Menu Start -->
        <ul class="navbar-nav iq-main-menu" id="sidebar-menu">

            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Home</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('dashboard') }}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="icon-20">
                            <path
                                d="M10.1528 5.55559C10.2037 5.65925 10.2373 5.77027 10.2524 5.8844L10.5308 10.0243L10.669 12.1051C10.6705 12.3191 10.704 12.5317 10.7687 12.7361C10.9356 13.1326 11.3372 13.3846 11.7741 13.3671L18.4313 12.9316C18.7196 12.9269 18.998 13.0347 19.2052 13.2313C19.3779 13.3952 19.4894 13.6096 19.5246 13.8402L19.5364 13.9802C19.2609 17.795 16.4592 20.9767 12.6524 21.7981C8.84555 22.6194 4.94186 20.8844 3.06071 17.535C2.51839 16.5619 2.17965 15.4923 2.06438 14.389C2.01623 14.0624 1.99503 13.7326 2.00098 13.4026C1.99503 9.31279 4.90747 5.77702 8.98433 4.92463C9.47501 4.84822 9.95603 5.10798 10.1528 5.55559Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M12.8701 2.00082C17.43 2.11683 21.2624 5.39579 22.0001 9.81229L21.993 9.84488L21.9729 9.89227L21.9757 10.0224C21.9652 10.1947 21.8987 10.3605 21.784 10.4945C21.6646 10.634 21.5014 10.729 21.3217 10.7659L21.2121 10.7809L13.5313 11.2786C13.2758 11.3038 13.0214 11.2214 12.8314 11.052C12.6731 10.9107 12.5719 10.7201 12.5433 10.5147L12.0277 2.84506C12.0188 2.81913 12.0188 2.79102 12.0277 2.76508C12.0348 2.55367 12.1278 2.35384 12.2861 2.21023C12.4444 2.06662 12.6547 1.9912 12.8701 2.00082Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Dashboard</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link {{ request()->is('pengaturan') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('pengaturan') }}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="icon-20">
                            <path
                                d="M12.0122 14.8299C10.4077 14.8299 9.10986 13.5799 9.10986 12.0099C9.10986 10.4399 10.4077 9.17993 12.0122 9.17993C13.6167 9.17993 14.8839 10.4399 14.8839 12.0099C14.8839 13.5799 13.6167 14.8299 12.0122 14.8299Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M21.2301 14.37C21.036 14.07 20.76 13.77 20.4023 13.58C20.1162 13.44 19.9322 13.21 19.7687 12.94C19.2475 12.08 19.5541 10.95 20.4228 10.44C21.4447 9.87 21.7718 8.6 21.179 7.61L20.4943 6.43C19.9118 5.44 18.6344 5.09 17.6226 5.67C16.7233 6.15 15.5685 5.83 15.0473 4.98C14.8838 4.7 14.7918 4.4 14.8122 4.1C14.8429 3.71 14.7203 3.34 14.5363 3.04C14.1582 2.42 13.4735 2 12.7172 2H11.2763C10.5302 2.02 9.84553 2.42 9.4674 3.04C9.27323 3.34 9.16081 3.71 9.18125 4.1C9.20169 4.4 9.10972 4.7 8.9462 4.98C8.425 5.83 7.27019 6.15 6.38109 5.67C5.35913 5.09 4.09191 5.44 3.49917 6.43L2.81446 7.61C2.23194 8.6 2.55897 9.87 3.57071 10.44C4.43937 10.95 4.74596 12.08 4.23498 12.94C4.06125 13.21 3.87729 13.44 3.59115 13.58C3.24368 13.77 2.93709 14.07 2.77358 14.37C2.39546 14.99 2.4159 15.77 2.79402 16.42L3.49917 17.62C3.87729 18.26 4.58245 18.66 5.31825 18.66C5.66572 18.66 6.0745 18.56 6.40153 18.36C6.65702 18.19 6.96361 18.13 7.30085 18.13C8.31259 18.13 9.16081 18.96 9.18125 19.95C9.18125 21.1 10.1215 22 11.3069 22H12.6968C13.872 22 14.8122 21.1 14.8122 19.95C14.8429 18.96 15.6911 18.13 16.7029 18.13C17.0299 18.13 17.3365 18.19 17.6022 18.36C17.9292 18.56 18.3278 18.66 18.6855 18.66C19.411 18.66 20.1162 18.26 20.4943 17.62L21.2097 16.42C21.5776 15.75 21.6083 14.99 21.2301 14.37Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Pengaturan</span>
                </a>
            </li>

            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Data</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-user" role="button" aria-expanded="false"
                    aria-controls="sidebar-user">
                    <i class="icon">
                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z"
                                fill="currentColor"></path>
                            <path
                                d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z"
                                fill="currentColor"></path>
                            <path opacity="0.4"
                                d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z"
                                fill="currentColor"></path>
                            <path
                                d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Users</span>
                    <i class="right-icon">
                        <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" width="18" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </i>
                </a>
                <ul class="sub-nav collapse" id="sidebar-user" data-bs-parent="#sidebar-menu">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user-profile') ? 'active' : '' }}"
                            href="../dashboard/app/user-profile.html">
                            <i class="icon">
                                <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor">
                                        </circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> U </i>
                            <span class="item-name">User Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('add-user') ? 'active' : '' }}"
                            href="../dashboard/app/user-add.html">
                            <i class="icon">
                                <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor">
                                        </circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> A </i>
                            <span class="item-name">Add User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user') ? 'active' : '' }}" href="{{ url('user') }}">
                            <i class="icon">
                                <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                        <circle cx="12" cy="12" r="8" fill="currentColor">
                                        </circle>
                                    </g>
                                </svg>
                            </i>
                            <i class="sidenav-mini-icon"> U </i>
                            <span class="item-name">User List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link {{ request()->is('produk') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('produk') }}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="icon-20">
                            <path opacity="0.4"
                                d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83V17.16C3 20.26 4.77 22 7.81 22H16.191C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2Z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.07996 6.6499V6.6599C7.64896 6.6599 7.29996 7.0099 7.29996 7.4399C7.29996 7.8699 7.64896 8.2199 8.07996 8.2199H11.069C11.5 8.2199 11.85 7.8699 11.85 7.4289C11.85 6.9999 11.5 6.6499 11.069 6.6499H8.07996ZM15.92 12.7399H8.07996C7.64896 12.7399 7.29996 12.3899 7.29996 11.9599C7.29996 11.5299 7.64896 11.1789 8.07996 11.1789H15.92C16.35 11.1789 16.7 11.5299 16.7 11.9599C16.7 12.3899 16.35 12.7399 15.92 12.7399ZM15.92 17.3099H8.07996C7.77996 17.3499 7.48996 17.1999 7.32996 16.9499C7.16996 16.6899 7.16996 16.3599 7.32996 16.1099C7.48996 15.8499 7.77996 15.7099 8.07996 15.7399H15.92C16.319 15.7799 16.62 16.1199 16.62 16.5299C16.62 16.9289 16.319 17.2699 15.92 17.3099Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Produk</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link {{ request()->is('gudang') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('gudang') }}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="icon-20">
                            <path
                                d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Gudang</span>
                </a>
            </li>

            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Transaction</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link {{ request()->is('pembelian') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('pembelian') }}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="icon-20">
                            <path opacity="0.4"
                                d="M2 7.916V16.084C2 19.623 4.276 22 7.665 22H16.335C19.724 22 22 19.623 22 16.084V7.916C22 4.378 19.723 2 16.334 2H7.665C4.276 2 2 4.378 2 7.916Z"
                                fill="currentColor"></path>
                            <path
                                d="M7.72033 12.8555L11.4683 16.6205C11.7503 16.9035 12.2493 16.9035 12.5323 16.6205L16.2803 12.8555C16.5723 12.5615 16.5713 12.0865 16.2773 11.7945C15.9833 11.5025 15.5093 11.5025 15.2163 11.7965L12.7493 14.2735V7.91846C12.7493 7.50346 12.4133 7.16846 11.9993 7.16846C11.5853 7.16846 11.2493 7.50346 11.2493 7.91846V14.2735L8.78333 11.7965C8.63633 11.6495 8.44433 11.5765 8.25133 11.5765C8.06033 11.5765 7.86833 11.6495 7.72233 11.7945C7.42933 12.0865 7.42833 12.5615 7.72033 12.8555Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Pembelian</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link {{ request()->is('penjualan') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('penjualan') }}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="icon-20">
                            <path opacity="0.4"
                                d="M22 16.084V7.916C22 4.377 19.724 2 16.335 2H7.665C4.276 2 2 4.377 2 7.916V16.084C2 19.622 4.277 22 7.666 22H16.335C19.724 22 22 19.622 22 16.084Z"
                                fill="currentColor"></path>
                            <path
                                d="M16.2792 11.1445L12.5312 7.37954C12.2492 7.09654 11.7502 7.09654 11.4672 7.37954L7.71918 11.1445C7.42718 11.4385 7.42818 11.9135 7.72218 12.2055C8.01618 12.4975 8.49018 12.4975 8.78318 12.2035L11.2502 9.72654V16.0815C11.2502 16.4965 11.5862 16.8315 12.0002 16.8315C12.4142 16.8315 12.7502 16.4965 12.7502 16.0815V9.72654L15.2162 12.2035C15.3632 12.3505 15.5552 12.4235 15.7482 12.4235C15.9392 12.4235 16.1312 12.3505 16.2772 12.2055C16.5702 11.9135 16.5712 11.4385 16.2792 11.1445Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Penjualan</span>
                </a>
            </li>

            <li class="nav-item static-item">
                <a class="nav-link static-item disabled" href="#" tabindex="-1">
                    <span class="default-icon">Report</span>
                    <span class="mini-icon">-</span>
                </a>
            </li>

            <li class="nav-item mb-3">
                <a class="nav-link {{ request()->is('laporan') ? 'active' : '' }}" aria-current="page"
                    href="{{ url('laporan') }}">
                    <i class="icon">
                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="icon-20">
                            <path opacity="0.4"
                                d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z"
                                fill="currentColor"></path>
                            <path
                                d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z"
                                fill="currentColor"></path>
                            <path
                                d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z"
                                fill="currentColor"></path>
                            <path
                                d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z"
                                fill="currentColor"></path>
                        </svg>
                    </i>
                    <span class="item-name">Laporan</span>
                </a>
            </li>

            <hr class="hr-horizontal">
        </ul>
        <!-- Sidebar Menu End -->
    </div>
</div>
