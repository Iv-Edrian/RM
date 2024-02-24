'use strict';
(function() {
    var db = {
        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.Name || client.Name.indexOf(filter.Name) > -1)
                    && (!filter.Age || client.Age === filter.Age)
                    && (!filter.Address || client.Address.indexOf(filter.Address) > -1)
                    && (!filter.Country || client.Country === filter.Country)
                    && (filter.Married === undefined || client.Married === filter.Married);
            });
        },
        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },
        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }
    };
    window.db = db;
    db.countries = [
        { Name: "India", Id: 0 },
        { Name: "United States", Id: 1 },
        { Name: "Canada", Id: 2 },
        { Name: "United Kingdom", Id: 3 },
        { Name: "France", Id: 4 },
        { Name: "Brazil", Id: 5 },
        { Name: "China", Id: 6 },
        { Name: "Russia", Id: 7 }
    ];
    db.clients = [
        {
            "Task": "Wordpress",
            "Email": "Pixel@efo.com",
            "Phone": "+91 9152639845",
            "Assign": "Otto Clay",
            "Date": "26/09/2022",
            "Price": "$2315.00",
            "Status": "<span class=\"font-warning\">In progress</span>", 
            "Progress": "100%",

            "Id": "1",
            "Product": "Samsung S22 ultra ",
            "Order Id": "#F8ST59L",
            "Quantity": "2",
            "Shipped": "<span class=\"badge badge-light-danger\">Out For Delivery</span>",
            "Total": "$25364",

            "Employee Name": "Virat Kohli",
            "Salary": "$12,000",
            "Skill": "<div class=\"progress-showcase\"><div class=\"progress sm-progress-bar\"><div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div></div>",
            "Office": "India",
            "Hours": "4:30",
            "Experience": "12 Year",
        },
        {
            "Task": "Web Designer",
            "Email": "Dewvrak12@gmail.com",
            "Phone": "+91 9563256895",
            "Assign": "Mark Jecno",
            "Date": "26/09/2022",
            "Price": "$1598.50",
            "Status": "<span class=\"font-warning\">In progress</span>",
            "Progress": "60%",

            "Id": "2",
            "Product": "Airpord Pro",
            "Order Id": "#TD6Y56W",
            "Quantity": "1",
            "Shipped": "<span class=\"badge badge-light-danger\">Order Cancelled</span>",
            "Total": "$12457",

            "Employee Name": "Ronaldo",
            "Salary": "$80,000",
            "Skill": "<div class=\"progress-showcase\"><div class=\"progress sm-progress-bar\"><div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 78%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div></div>",
            "Office": "UK",
            "Hours": "3:00",
            "Experience": "20 Year",
        },
        {
            "Task": "Php",
            "Email": "Lakhsr33@gmail.com",
            "Phone": "+91 8569325641",
            "Assign": "Ruby Rocha",
            "Date": "12/07/2022",
            "Price": "$1598.50",
            "Status": "<span class=\"font-warning\">In progress</span>",
            "Progress": "42%",

            "Id": "3",
            "Product": "OnePlus Nord CE 2 Lite",
            "Order Id": "#9E75CF4",
            "Quantity": "4",
            "Shipped": "<span class=\"badge badge-light-success\">Delivery Completed</span>",
            "Total": "$89241",

            "Employee Name": "Jos Buttler",
            "Salary": "$70,000",
            "Skill": "<div class=\"progress-showcase\"><div class=\"progress sm-progress-bar\"><div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div></div>",
            "Office": "Englend",
            "Hours": "4:00",
            "Experience": "8 Year",
        },
        {
            "Task": "Web Development",
            "Email": "Fatik02@gmail.com",
            "Phone": "+91 7589563241",
            "Assign": "Connor Johnston",
            "Date": "26/09/2022",
            "Price": "$2315.00",
            "Status": "<span class=\"font-danger\">Pending</span>",
            "Progress": "90%",

            "Id": "4",
            "Product": "i phone 14 pro Max",
            "Order Id": "#1A84RD3",
            "Quantity": "1",
            "Shipped": "<span class=\"badge badge-light-danger\">Order Cancelled</span>",
            "Total": "$89241",

            "Employee Name": "Jos Buttler",
            "Salary": "$70,000",
            "Skill": "<div class=\"progress-showcase\"><div class=\"progress sm-progress-bar\"><div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div></div></div>",
            "Office": "Englend",
            "Hours": "4:00",
            "Experience": "8 Year",
        },
   
     ];
}());