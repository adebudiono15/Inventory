  <!-- Sidebar -->
  <div class="main-menu main-menu-sidebar">
      <a href="javascript:;" class="toggle-hide-sidebar active"><i class="icon-x"></i></a>
      <div class="logo">
          <img src="{{ url('assets/assets/img/logo.png') }}" width="170px" alt="">
      </div>
      <div class="nav-menu">
          <ul class="nav flex-column">
              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="icon-home"></i>
                      Dashboard</a></li>

              <li class="nav-item submenu">
                  <a data-toggle="collapse" href="#nav-master" role="button"
                      aria-expanded="{{ request()->is('master-*') ? 'true' : 'false' }}" aria-controls="nav-master"><i
                          class="icon-database"></i>MASTER <span
                          class="badge badge-danger badge-pill badge-right">3</span></a>
                  <ul class="menu-dropdown collapse {{ request()->is('master-*') ? 'show' : '' }}" id="nav-master">
                      <li class="{{ request()->is('master-supplier') ? 'active' : '' }}"><a
                              href="master-supplier">Supplier</a></li>
                      <li class="{{ request()->is('master-customer') ? 'active' : '' }}"><a
                              href="master-customer">Customer</a></li>
                      <li class="{{ request()->is('master-barang') ? 'active' : '' }}"><a
                              href="master-barang">Barang</a></li>
                      <li class="{{ request()->is('master-satuan') ? 'active' : '' }}"><a
                              href="master-satuan">Satuan</a></li>
                  </ul>
              </li>

              <li class="nav-item submenu">
                  <a data-toggle="collapse" href="#nav-transaksi" role="button"
                      aria-expanded="{{ request()->is('transaksi-*') ? 'true' : 'false' }}"
                      aria-controls="nav-transaksi"><i class="icon-book"></i>TRANSAKSI <span
                          class="badge badge-danger badge-pill badge-right">4</span></a>
                  <ul class="menu-dropdown collapse {{ request()->is('transaksi-*') ? 'show' : '' }}"
                      id="nav-transaksi">
                      {{-- TUNAI --}}
                      <ul class="mt-2" style="margin-left: -20px;">TUNAI</ul>
                      <li class="{{ request()->is('transaksi-pembelian-tunai') ? 'active' : '' }}"><a
                              href="transaksi-pembelian-tunai">Pembelian</a></li>
                      <li class="{{ request()->is('transaksi-penjualan-tunai') ? 'active' : '' }}"><a
                              href="transaksi-penjualan-tunai">Penjualan</a></li>

                      {{-- KREDIT --}}
                      <ul class="mt-2" style="margin-left: -20px;">KREDIT</ul>
                      <li class="{{ request()->is('transaksi-pembelian-kredit') ? 'active' : '' }}"><a
                              href="">Pembelian</a></li>
                      <li class="{{ request()->is('transaksi-penjualan-kredit') ? 'active' : '' }}"><a
                              href="">Penjualan</a></li>
                  </ul>
              </li>

              <li class="nav-item submenu">
                  <a data-toggle="collapse" href="#nav-keuangan" role="button"
                      aria-expanded="{{ request()->is('keuangan-*') ? 'true' : 'false' }}"
                      aria-controls="nav-keuangan"><i class="icon-dollar-sign"></i>KEUANGAN <span
                          class="badge badge-danger badge-pill badge-right">4</span></a>
                  <ul class="menu-dropdown collapse {{ request()->is('keuangan-*') ? 'show' : '' }}" id="nav-keuangan">
                      {{-- TUNAI --}}
                      <ul class="mt-2" style="margin-left: -20px;">TUNAI</ul>
                      <li class="{{ request()->is('keuangan-pendapatan-tunai') ? 'active' : '' }}"><a
                              href="">Pendapatan</a></li>
                      <li class="{{ request()->is('keuangan-pengeluaran-tunai') ? 'active' : '' }}"><a
                              href="">Pengeluaran</a></li>

                      {{-- NON TUNAI --}}
                      <ul class="mt-2" style="margin-left: -20px;">NON TUNAI</ul>
                      <li class="{{ request()->is('keuangan-pendapatan-nontunai') ? 'active' : '' }}"><a
                              href="">Pendapatan</a></li>
                      <li class="{{ request()->is('keuangan-pengeluaran-nontunai') ? 'active' : '' }}"><a
                              href="">Pengeluaran</a></li>
                  </ul>
              </li>

          </ul>
      </div>
  </div>
