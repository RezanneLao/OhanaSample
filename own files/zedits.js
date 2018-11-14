for (var i = 0; i < nodeDataArray.length; i++) {
    var data = nodeDataArray[i];
    var key;
    if(data.pid === null) {
        key = data.pid;
    }
    else key = data.id;

    var relationships = data.relationship;
    var maritalStatus = data.maritalStatus;

    if(relationships !== null) {
        for (var a = 0; a < relationships.length; a++) {
            for (var b = 0; b < maritalStatus.length; b++) {
                if(relationships === "husband") {
                    
                }
            }
        }
    }

    if (relationships !== null) {
        for (var a = 0; a < relationships.length; a++) {
            for (let b = 0; b < maritalStatus.length; b++) {
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

    if (virs !== undefined) {
        if (typeof virs === "String") virs = [virs];
        if (typeof ms === "String") ms = [ms];
        // console.log("Vir", virs);
        for (var j = 0; j < virs.length; j++) {
            for (let b = 0; b < ms.length; b++) {
                var husband = virs[j];

                if (key === husband) {
                    continue;
                }

                var marstat = ms[b];
                var connect = findMarriage(diagram, key, husband);

                if (connect === null) {
                    if (marstat === "married") {
                        var node = { s: "Married" };
                        model.addNodeData(node);

                        var link = {
                            from: key,
                            to: husband,
                            labelKeys: [node.key],
                            category: "Marriage"
                        };
                        // console.log("M Link Vir", link);
                        model.addLinkData(link);
                    } else if (marstat === "divorced") {
                        var node = { s: "Divorced" };
                        model.addNodeData(node);

                        var link = {
                            from: key,
                            to: husband,
                            labelKeys: [node.key],
                            category: "Divorced"
                        };
                        // console.log("M Link Vir", link);
                        model.addLinkData(link);
                    } else if (marstat === "separated") {
                        var node = { s: "Separated" };
                        model.addNodeData(node);

                        var link = {
                            from: key,
                            to: husband,
                            labelKeys: [node.key],
                            category: "Separated"
                        };
                        // console.log("M Link Vir", link);
                        model.addLinkData(link);
                    }
                }
            }
        }
    }
}