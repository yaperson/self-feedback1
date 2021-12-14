const compare = function (ids, asc) {
    return function (row1, row2) {
        const tdValue = function (row, ids) {
            return row.children[ids].textContent;
        }
        const tri = function (v1, v2) {
            if (v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2)) {
                return v1 - v2;
            }
            else {
                return v1.toString().localeCompare(v2);
            }
            return v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2);
        };
        return tri(tdValue(asc ? row1 : row2, ids), tdValue(asc ? row2 : row1, ids));
    }
}

const tbody = document.querySelectorAll('tbody');
const thx = document.querySelectorAll('th');
const trxb = document.querySelectorAll('tr');
thx.forEach(function (th) {
    th.addEventListener('click', function () {
        let classe = Array.from(trxb).sort(compare(Array.from(thx).indexOf(th), this.asc = !this.asc));
        classe.forEach(function (tr) {
            tbody.appendChild(tr)
        });
    })
});