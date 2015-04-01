var ExhibitionForm = (function(){
    // CONSTRUCTOR
    var constructor=function(params) {
        var $_table = params['table_elem'];
        var rowsCount = $_table.find("tr").length;
        var $_addCode = params['button_add'];
        var self=this;
        /* PROTECTED METHODS */
            
        this.addNcbType = function() {
            
            var $rowTemplate = $_table.find("tr.row-template");
            var $newRow = $rowTemplate.clone();
            $newRow.removeClass('hidden row-template');
            $newRow.find("input[type='hidden']").val(rowsCount); // ??
            $newRow.find(":input").each(function(){
                if(typeof jQuery(this).attr("name") != 'undefined'){
                    var newName = jQuery(this).attr("name").replace("XCounter", rowsCount);
                    jQuery(this).attr("name", newName);
                }
            });
            $rowTemplate.before($newRow);
            rowsCount++;
            return false;
        };
        
        $_addCode.click(function(){
            self.addNcbType();
            return false;
        });
    }
        
    return constructor;
})();

$("#exhibition-form").on('click','.delete',function(){
    $(this).parent().remove();
});
