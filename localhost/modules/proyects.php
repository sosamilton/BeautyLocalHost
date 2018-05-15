<!-- TABLE: LATEST ORDERS -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Proyects</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
      <table class="table no-margin">
        <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Branch</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?PHP
          foreach ($dirs as $key => $dir) {
            $proyect = getProyectFile($dir);

            $gitStatus = getGitStatus($dir);
            $size = getFolderSize(__DIR__."/".$dir);
            // si es git le pido la rama
            if (isNotExclude($dir)) {
            ?>
              <tr>
                  <td><a href="<?= $dir."/" ?>"><?= (empty($proyect['title']))? $dir : $proyect['title']; ?></a></td>
                  <td><?= $proyect['description']; ?></td>
                  <td><span class="label <?= ($gitStatus <> "local") ? 'label-success' : 'label-default'?>"> <i class="fa <?= ($gitStatus <> "local") ? 'fa-code-fork' : 'fa-folder'?>"> <?= $gitStatus ?></span></td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-success" title="run production" ><i class="fa fa-check-square"></i></button>
                      <button type="button" class="btn btn-primary" title="run development"><i class="fa  fa-check-square-o"></i></button>
                      <button type="button" class="btn btn-info" title="edit data" data-toggle="modal" data-target="#modal-default" data-type="<?= $dir ?>"><i class="fa  fa-pencil"></i></button>
                    </div>
                  </td>
              </tr>
            <?PHP
            }
          }
        ?>

        </tbody>
      </table>
    </div>
    <!-- /.table-responsive -->
  </div>
</div>
