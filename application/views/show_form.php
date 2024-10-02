<?php
echo form_open('manage_products/create');
echo form_label('Code', 'code');
echo form_input('code');
echo br();
echo form_label('Name','name');
echo form_input('name');
echo br();
echo form_label('Price', 'price');
echo form_input('price');
echo br(2);
echo form_submit('send', 'send');
echo form_close();
