(function($) {
    "use strict";
    $("#basicScenario").jsGrid({
        width: "105%",
        filtering: true,
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 10,
        pageButtonCount: 5,
        deleteConfirm: "Do you really want to delete the client?",
        controller: db,
        fields: [
            { name: "Template No.", type: "text", width: 100 },
            { name: "Owner", type: "text", width: 100 },
            { name: "Risks", type: "text", width: 150 },
            { name: "Impact", type: "text", width: 100 },
            { name: "Plans", type: "text", width: 150 },
            { name: "Team / Personnel Responsible", type: "text", width: 120 },
            { type: "control" , width: 80 },

        ]
    });
})(jQuery);