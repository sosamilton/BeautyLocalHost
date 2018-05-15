<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Ports Open</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <table class="table table-condensed table-hover">
      <tbody>
      <tr>
        <th># port</th>
        <th>Dype</th>
        <th>State</th>
      </tr>
      <?PHP
      foreach ($ports as $port)
      {
          $connection = @fsockopen($host, $port['port']);
      ?>
      <tr>
        <td><?= $port['port']; ?></td>
        <td><?= $port['name']; ?></td>
        <td><span class="label <?= (is_resource($connection)) ? 'label-success' : 'label-danger'?>"><?=(is_resource($connection)) ? 'Open' : 'Close'?></span></td>
      </tr>

      <?PHP
    } ?>
    </tbody>
  </table>
  </div>
</div>
