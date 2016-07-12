<div class="container">
  <table  border="1">
    <thead>
      <th>Title</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Selected</th>
      <th>Delete</th>
    </thead>
    
    <tbody>
    <form>
      <?php foreach ($news as $item) { ?>
        <tr>
        <td><a href="<?php echo site_url("admin/news"); ?>/<?php echo $item["id"];?>"><?php echo $item['title']; ?></a></td>
        <td><?php echo $item['created']; ?></td>
        <td><?php echo $item['modified']; ?></td>
        <td><?php echo $item['front_selected']; ?></td>
        <td><a type="button" class="btn btn-default btn-lg" href="<?php echo site_url("admin/news"); ?>/<?php echo $item["id"];?>/delete">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </a>
        </td>
        </tr>
      <?php } ?>
     </form> 
    </tbody>
  </table>
</div>