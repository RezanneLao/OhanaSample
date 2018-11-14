console.log(dgsg);
----
@foreach($clans as $clan)
    @foreach($potentialUsers as $potentialUser)
        @if($potentialUser->pid === $clan->pid)
            {{$potentialUser->firstName}}
        @endif
    @endforeach
@endforeach
----
@foreach($clans as $clan)
    @foreach($potentialUsers as $potentialUser)
        @if($potentialUser->pid === $clan->pid)
            {{$clan->potentialUser->firstName}}
        @endif
    @endforeach
@endforeach
----
for(var i = 0; i < data.length; i++) {
    if(data[i].pid === null) {
        data[i].key = data[i].id;
        // console.log(data[i]);

    }
    else if(data[i].pid !== null) {
        data[i].key = data[i].pid;
        // console.log(data[i]);
    }

    for(var j = 0; j < userPotentialRef.length; j++) {
        if(userPotentialRef[j].pid === data[i].pid) {
            // console.log(userPotentialRef[j].firstName)
        }
    }
}
----
for(var i = 0; i < nodeDataArray.length; i++) {
    for(var j = 0; j < clanIndividualData.length; j++) {
        if(nodeDataArray[i].pid === null) {
            if(clanIndividualData[j].id === nodeDataArray[i].id) {
                console.log(clanIndividualData[j].firstName);
            }
        }
    }
}
----
// UNSUCCESSFUL
for(var i = 0; i < nodeDataArray.length; i++) {
    for(var j = 0; j < arrayData.length; j++) {
        if(nodeDataArray[i].pid === arrayData[j].pid) {
            if(arrayData[j].maritalStatus !== null) {
                var connect = findMarriage(diagram, arrayData[j].pid, arrayData[j].id);
                if (connect === null) {
                    if (arrayData[j].maritalStatus === "married") {
                        var node = { gender: "married" };
                        model.addNodeData(node);

                        var link = {
                            from: arrayData[j].pid,
                            to: arrayData[j].id,
                            labelKeys: [node.key],
                            category: "married"
                        };
                        model.addLinkData(link);
                        console.log(link);
                    }
                }
            }
            if(nodeDataArray[i].id === arrayData[j].id) {
                console.log('user')
            }
        }
    }
}