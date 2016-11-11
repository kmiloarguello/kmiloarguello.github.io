function myClickstream(myObject){
	
	myObject = {};
	myObject.Track_Element_Description_vod__c = "test";
	myObject.Usage_Duration_vod__c = 0;
	myObject.Answer_vod__c = "";
	myObject.Usage_Start_Time_vod__c = new Date();
	myObject.Track_Element_Type_vod__c = "test";

    com.veeva.clm.createRecord("Call_Clickstream_vod__c", myObject, printSavedResults);
}

function printSavedResults(result) {
	alert(JSON.stringify(result));
}