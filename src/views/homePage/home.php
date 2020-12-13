<?php
?>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
                <button 
                  type="button" class="btn btn-info" 
                  style="float: right;"
                  onclick="addWork()"
                  >Add</button>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Work Name</th>
                      <th>Starting Date</th>
                      <th>Ending Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($works as $work) { ?>
                        <tr>
                        <td><?=$work->id?></td>
                        <td><?=$work->workName?></td>
                        <td><?=$work->startingDate?></td>
                        <td><?=$work->endingDate?></td>
                        <td>
                            <span 
                                <?=($work->status=='PLANNING')? 'class="badge bg-warning"'
                                        :(($work->status) == 'DOING' ? 'class="badge bg-primary"'
                                        :'class="badge bg-success"')?>
                            >
                                <?=$work->status?>
                            </span>
                        </td>
                        <td>
                        <button 
                            type="button" 
                            class="btn btn-block btn-outline-warning btn-sm"
                            data-id= <?=$work->id?>
                            data-workName=<?=$work->workName?>
                            data-startDate= <?=$work->startingDate?>
                            data-endDate= <?=$work->endingDate?>
                            data-status= <?=$work->status?>
                            onclick= "update(this)"
                        >
                            <i class="fas fa-edit"></i>
                        </button>
                        <a 
                            href=<?="/delete/".$work->id?> 
                            class="btn btn-block btn-outline-danger btn-sm"
                        >
                            <i 
                            class="fas fa-trash-alt">
                            </i>
                        </a>
                        </td>
                        </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
          </div>
        
        </div>
<?php ?>