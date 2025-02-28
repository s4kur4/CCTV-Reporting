<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    <h3 class="header smaller lighter blue"><?=ucfirst($this->page)?> <button onClick="location.href='<?=base_url("issue/tambah/")?>'" class="btn btn-minier btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</button></h3>

    <div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>ID</th>
                            <th>Store</th>
														<th>Judul</th>
														<th>Pelanggan</th>
                            <th>Tanggal Laporan</th>
                            <th>Status Issue</th>
                            <th>Pelapor</th>
                            <th>Pic CCTV</th>
														<th>Aksi</th>
													</tr>
												</thead>

												<tbody>
                          <?php
                          foreach ($listIssue as $value) {
                            echo '<tr>';
                              echo '<td>'. ucfirst($value->issue_id) .'</td>';
                              echo '<td>'. ucfirst($value->store_name) .'</td>';
                              echo '<td>'. ucfirst($value->issue_title) .'</td>';
                              echo '<td>';
                                echo (empty($value->issue_customer)) ? '-': ucfirst($value->issue_customer);
                              echo '</td>';
                              echo '<td>'. date("Y/M/d", strtotime($value->issue_start)).'</td>';
                              echo '<td>'.$this->dswitch->statusCase($value->issue_status).'</td>';
                              echo '<td>'. ucfirst($value->account_identity).'</td>';
                              echo '<td>';
                                echo (empty($value->issue_cctv)) ? '-' : ucfirst($value->issue_cctv);
                              echo '</td>';
                              echo '<td>
                              <div class="hidden-sm hidden-xs action-buttons">
                              																<a class="blue" href="'. base_url('issue/lihat/' . $value->issue_id) .'">
                              																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
                              																</a>
                              															</div>
                              </td>';
                            echo '</tr>';
                          }
                          ?>
												</tbody>
											</table>
										</div>

    <!-- PAGE CONTENT ENDS -->
  </div><!-- /.col -->
</div><!-- /.row -->
