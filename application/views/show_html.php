<?php
echo doctype('html5');
echo heading('Software Engineer', 1, 'style="color: pink;"');
echo img('https://gratisography.com/wp-content/uploads/2024/03/gratisography-funflower-800x525.jpg',0,'width=300');

// $list = array(
//     'hello',
//     'world'
// );
// echo ul($list);

echo form_open('manage_products/deleteData');
echo form_label('Code', 'code');
echo form_input('code');
echo br(2);
echo form_submit('send', 'send');
echo form_close();