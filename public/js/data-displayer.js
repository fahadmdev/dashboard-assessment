var barChartData = [];
var pieChartData = [];

var reportsJSON = null;
var threatsJSON = null;

$.getJSON('js/response.json', function (jd) {
    
    reportsJSON = jd.Report[0];
    threatsJSON = jd.Threatend[0];

    populateTopCards(reportsJSON);
    
    // Data being used in the graphs
    barChartData = [
        reportsJSON.Low_vuln,
        reportsJSON.Medium_vuln,
        reportsJSON.High_vuln,
        reportsJSON.Critical_vuln
    ];

    pieChartData = [
        reportsJSON.Alertness,
        reportsJSON.General_User_Conduct_per,
        reportsJSON.Threatent,
    ];

    populateAlertCards(reportsJSON);
    populateProblemSolutions(reportsJSON);
    populatePercetnatage(reportsJSON);
    populateSystemCard(threatsJSON);
    populateBreachCard(threatsJSON);
    populateThreatCards(threatsJSON);
    $('.problem-url').attr("href", reportsJSON.uri)
});


function populateTopCards(reportsJSON){
    $('.client-name').html(reportsJSON.client_name);
    $('.client-email').html(reportsJSON.client_email);
    $('.client-industry').html(reportsJSON.client_industry);
    
    $('.vulnerability-score').html(reportsJSON.final_score);
    $('.report-status').html(reportsJSON.status);
    
    // Color Of Status Card From JSON
    style = "0.25rem solid "+reportsJSON.status_color;
    $('.border-left-status').css("border-left", style);
    $('.text-status').css("color", reportsJSON.status_color);
}

function populateAlertCards(reportsJSON){
    $('.alert-title').html(reportsJSON.alert);
    $('.alert-description').html(reportsJSON.description);
    $('.alert-cve').html(reportsJSON.CVE);
    $('.alert-severity').html(reportsJSON.severity);
}

function populateProblemSolutions(reportsJSON){
    $('.solution-list').html('');
    const solutions = reportsJSON.solution.split('</p>');
    solutions.forEach(solution => {
        if(solution!=="" && solution!==" " && solution){
            html = "<li><p>"+solution+"</p></li>"
            $('.solution-list').append(html);
        }
    });
}

function populatePercetnatage(reportsJSON){
    $('.low-perc').html(reportsJSON.low_per+"%");
    $('.low-perc-bar').css("width",reportsJSON.low_per+"%");
    $('.low-perc-bar').attr("aria-valuenow",reportsJSON.low_per);

    $('.mid-perc').html(reportsJSON.medium_per+"%");
    $('.mid-perc-bar').css("width",reportsJSON.medium_per+"%");
    $('.mid-perc-bar').attr("aria-valuenow",reportsJSON.medium_per);

    $('.high-perc').html(reportsJSON.high_per+"%");
    $('.high-perc-bar').css("width",reportsJSON.high_per+"%");
    $('.high-perc-bar').attr("aria-valuenow",reportsJSON.high_per);

    $('.critical-perc').html(reportsJSON.critical_per+"%");
    $('.critical-perc-bar').css("width",reportsJSON.critical_per+"%");
    $('.critical-perc-bar').attr("aria-valuenow",reportsJSON.critical_per);
}

function populateSystemCard(threatsJSON){
    $('.system-msg').html(threatsJSON.system_defense);
    $('.system-description').html(threatsJSON.system_defense_description);
}

function populateBreachCard(threatsJSON){
    $('.breach-msg').html(threatsJSON.databreach);
    $('.breach-description').html(threatsJSON.databreach_description);
}

function populateThreatCards(threatsJSON){
    
    $('.threat-cards').html('');

    var keysArray = Object.keys(threatsJSON);

    var filteredKeysArray= keysArray.filter(function(value) { return value !== '_id' && value !== 'clientid'&& value !== 'scan_id' && value !== 'client_web_ip' && value !== 'system_defense' && value !==  'system_defense_description' && value !== 'databreach' && value !== 'databreach_description' })

    totalLength = filteredKeysArray.length;
    threatLoopTotal = totalLength/5;

    for (let index = 1; index <= threatLoopTotal; index++) {        
        descriptions="";
        const threatDescriptions = threatsJSON["threat"+index+"_description"].split('</p>');
        threatDescriptions.forEach(threatDescription => {
            if(threatDescription!=="" && threatDescription!==" " && threatDescription){
                descriptions += "<li>"+threatDescription+"</p></li>"
            }
        });
        
        html = `
        <!-- Threat Description Modal -->
        <div class="modal fade" id="threatDescriptionModal${index}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="threatDescriptionModalTitle${index}">Threat Description</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="threat-description-data">
                            <ul>${descriptions}</ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary"
                            data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Threat Description Modal -->

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body threat-card">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Tags: ${threatsJSON["threat"+index]}
                            </div>
                            <div class="mb-0 text-gray-800">
                                <p>Complexity: ${threatsJSON["threat"+index+"_attackcomplexity"]}</p>
                                <p>Confidentiality Impact: ${threatsJSON["threat"+index+"_confidentialityimpact"]}</p>
                                <p>Attack Origin: ${threatsJSON["threat"+index+"_geolocation"]}</p>
                                <button data-toggle="modal" data-target="#threatDescriptionModal${index}"
                                    style="float: right" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                    Click Here For Threat Description
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
        
        $('.threat-cards').append(html);
    };
}
