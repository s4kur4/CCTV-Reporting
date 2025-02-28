<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    <h3 class="header smaller lighter blue"><?=ucfirst($this->page)?></h3>

    <div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Identitas</th>
														<th>Username</th>
														<th>Tingkat</th>
														<th>Aksi</th>
													</tr>
												</thead>

												<tbody>
                          <?php
                          foreach ($listAccount as $value) {
                            echo '<tr>';
                              echo '<td>'. ucfirst($value->account_identity) .'</td>';
                              echo '<td>'. ucfirst($value->account_username) .'</td>';
                              echo '<td>';
                                switch ($value->account_level) {
                                  case 1:
                                    echo ucfirst('Root');
                                    break;

                                  case 2:
                                    echo ucfirst('Management');
                                    break;

                                  case 3:
                                    echo ucfirst('CCTV');
                                    break;

                                  case 4:
                                    echo ucfirst('Pelapor');
                                    break;

                                  default:
                                    echo 'User belum diberi hak akses level';
                                    break;
                                }
                              echo '</td>';
                              echo '<td>
                              <div class="hidden-sm hidden-xs action-buttons">
                              																<a class="blue" href="'. base_url('dataterhapus/penggunalihat/' . $value->account_username) .'">
                              																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
                              																</a>

                              																<a class="green" href="'. base_url('dataterhapus/penggunakembalikan/' . $value->account_username) .'">
                              																	<i class="ace-icon fa fa-check-square-o bigger-130"></i>
                              																</a>
                              </td>';
                            echo '<tr>';
                          }
                          ?>
												</tbody>
											</table>
										</div>

    <!-- PAGE CONTENT ENDS -->
  </div><!-- /.col -->
</div><!-- /.row -->
