<script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
                if(tag==1)
                {
                    DisSub2.style.display = "block";
					HandleLI2.className="current";
                }
                else
                {
                    DisSub2.style.display = "none";
					HandleLI2.className="";
                }
            }
</script>
 
    
    
<div id="category_tree">
	<dl class="clearfix">
     	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
        <div  class="dt"  <?php if ($this->_foreach['no']['iteration'] == 9): ?>style="border-bottom:none;"<?php endif; ?>  onMouseOver="sw_nav2(<?php echo $this->_foreach['no']['iteration']; ?>,1);" onMouseOut="sw_nav2(<?php echo $this->_foreach['no']['iteration']; ?>,0);">        
        	<div id="HandleLI2_<?php echo $this->_foreach['no']['iteration']; ?>" style=" position:relative; z-index:9999999999">
        		<a class="a <?php if (($this->_foreach['no']['iteration'] - 1) % 2 == 0): ?><?php else: ?>t<?php endif; ?>" href="<?php echo $this->_var['cat']['url']; ?>">
 					<?php echo htmlspecialchars($this->_var['cat']['name']); ?>
  					<img src="themes/ecmoban_benlai2015/images/biao8.gif">
 				</a>
			</div>
			<dd  id=DisSub2_<?php echo $this->_foreach['no']['iteration']; ?> style="display:none">
            	<ul> 
                    <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                    <li>
                        <a class="over_2 f_l" href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> 	 
                        <div class="list_r f_r">
                            <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                            <em><a class="over_3" href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></em>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </div>
                    </li>        
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
			</dd> 
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	</dl>
</div>
<div class="clearfix"></div>
