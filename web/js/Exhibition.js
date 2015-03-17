var ExhibitionForm = (function(){
    // CONSTRUCTOR
    var constructor=function(params) {
        var $counter=0;
        var $_table = jQuery("#activity-param-section table");
        var _$form = params['form_elem'];
        var rowsCount = $_table.find("tr").length;
        var $_newCode =_$form.find("#new_dog");
        var $_firstNext=_$form.find("#firstNext");
        var $_secondNext=_$form.find("#secondNext");
        var $_secondPrevious=_$form.find("#secondPrevious");
        var $_thirdPrevious=_$form.find("#thirdPrevious");        
        var $_stopCount=_$form.find("#stopCount");
       // var $_startCounter=_$form.find("#start_counter");
        var $_startCounter=$_table.find(".help");
        var $_endCounter=_$form.find("#end_counter");
        var self=this;
        /* PROTECTED METHODS */
        
    
        
        this.addNcbType = function() {
            rowsCount++;
            var $rowTemplate = $_table.find("tr.row-template");
            var $newRow = $rowTemplate.clone();
            $newRow.removeClass('hidden row-template');
            $newRow.find("input[type='hidden']").val(rowsCount);
            $newRow.find(":input").each(function(){
                if(typeof jQuery(this).attr("name") != 'undefined'){
                    var newName = jQuery(this).attr("name").replace("counter", rowsCount);
                    jQuery(this).attr("name", newName);
                }
            });
            $rowTemplate.before($newRow);
            return false;
        };
        
        this.next=function(){
            alert("idem2");
        };
        
        $_newCode.click(function(){
            
      //      alert("Oliver + Petra = ♥");
            self.addNcbType();
            return false;
        });
        $_firstNext.click(function(event){
            event.preventDefault();
            $(_$form.find("#first")).hide();
            $(_$form.find("#second")).show();
        });
        
        $_stopCount.click(function(){
            ++$counter;
            $(_$form.find("#showCount")).val($counter);
        });
        
         $_secondNext.click(function(event){
            event.preventDefault();
            $(_$form.find("#second")).hide();
            $(_$form.find("#third")).show();
        });
        
         $_secondPrevious.click(function(event){
            event.preventDefault();
            $(_$form.find("#second")).hide();
            $(_$form.find("#first")).show();
        });
        
        $_thirdPrevious.click(function(event){
            event.preventDefault();
            $(_$form.find("#third")).hide();
            $(_$form.find("#second")).show();
        });
        
        $_startCounter.click(function(event){
            alert("help1");
            $row = jQuery(this).closest("tr");
            $row.find("#lenght_counter").text("1");
        });
    };
    
   

    return constructor;
})();