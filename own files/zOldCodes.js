// genogram3

if (uxs !== undefined) {
    if (typeof uxs === "String") uxs = [uxs];
    if (typeof ms === "String") ms = [ms];
    // console.log("Ux", uxs);
    for (var a = 0; a < uxs.length; a++) {
        for (let b = 0; b < ms.length; b++) {
            var wife = uxs[a];

            if (key === wife) {
                continue;
            }

            var marstat = ms[b];
            var connect = findMarriage(diagram, key, wife);

            if (connect === null) {
                if (marstat === "married") {
                    var node = { s: "Married" };
                    model.addNodeData(node);

                    var link = {
                        from: key,
                        to: wife,
                        labelKeys: [node.key],
                        category: "Marriage"
                    };
                    // console.log("M Link Ux", link)
                    model.addLinkData(link);
                } else if (marstat === "divorced") {
                    var node = { s: "Divorced" };
                    model.addNodeData(node);

                    var link = {
                        from: key,
                        to: wife,
                        labelKeys: [node.key],
                        category: "Divorced"
                    };
                    // console.log("M Link Ux", link)
                    model.addLinkData(link);
                } else if (marstat === "separated") {
                    var node = { s: "Separated" };
                    model.addNodeData(node);

                    var link = {
                        from: key,
                        to: wife,
                        labelKeys: [node.key],
                        category: "Separated"
                    };
                    // console.log("M Link Ux", link)
                    model.addLinkData(link);
                }
            }
        }
    }
}

---

for (var i = 0; i < nodeDataArray.length; i++) {
    var data = nodeDataArray[i];
    var key = data.key;
    var relationship = data.relationship;
    var maritalStatus = data.maritalStatus;
    var pid = data.pid;

    relationshipArr.push(relationship);

    var connect = findMarriage(diagram, data.id, pid);

    if(connect === null && pid !== null && relationship === "husband") {
        var node = { gender: maritalStatus };
        model.addNodeData(node);

        var link = {
            from: data.id,
            to: pid,
            labelKeys: [node.key],
            category: maritalStatus
        };
        model.addLinkData(link);
    }

    if(pid !== null && relationship === "wife") {
        var node = { gender: maritalStatus };
        model.addNodeData(node);

        var link = {
            from: data.id,
            to: pid,
            labelKeys: [node.key],
            category: maritalStatus
        };
        model.addLinkData(link);
    }
}