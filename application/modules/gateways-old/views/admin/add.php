    <!-- Form with validation -->
        <form action="<? echo base_url().'admin/discounts/add'; ?>" id="valid" class="mainForm" method="post">
            <fieldset>
            
             
                <div class="widget"> 
                
                    <div class="head"><h5 class="iPencil"><? echo $this->lang->line('editing_cat_with_id'); ?></h5></div>
                    
                    
                    <div class="rowElem noborder">
                        <label><? echo $this->lang->line('category_name'); ?> :</label>
                        <div class="formRight">
                            <input type="text" class="validate[required]" name="title" id="title" />
                        </div>
                        <div class="fix"></div>
                    </div>
                    
                    <div class="rowElem">
                        <label><? echo 'percent'; ?> :</label>
                        <div class="formRight">
                            <input style="direction:ltr" type="text" class="validate[required]" name="percent" id="percent" />
                        </div>
                        <div class="fix"></div>
                    </div>
                    
                   
                    
                     
                    
                     
                    
                    
                    
                   
                    
                    <input type="submit" value="<? echo $this->lang->line('save_form'); ?>" class="greenBtn submitForm" />
                    <input type="reset" value="<? echo $this->lang->line('reset_form'); ?>" class="basicBtn submitForm" />
                    <br />
                    <div class="fix"></div>
                        
                </div>
            </fieldset>
        </form>   
        
        <!-- Form -->