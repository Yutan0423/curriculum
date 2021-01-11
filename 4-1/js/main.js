var app = new Vue({
    el: '#app',
    data: {
        list: [],
        notDoneList: [],
        addText: '',
        message: '',
        keyword: '',
        searchList: []

    },
    //watchでlistの変更を監視
    watch: {
        list: {
            handler: function() {
                //localStorageにデータを保存
                localStorage.setItem("list", JSON.stringify(this.list));
            },
            deep: true
        }
    },
    //マウントされた時にlocalStorageからデータを取得
    mounted: function() {
        this.list = JSON.parse(localStorage.getItem("list")) || [];
    },
    methods: {
        addToDo: function() {
            if (this.addText !== '') {
                this.list.push({
                    text: this.addText, 
                    isChecked: false,
                });
            }
            this.addText = '';
        },
        deleteBtn: function() {
            this.list = this.list.filter(function(todo) {
                return !todo.isChecked;
            });
        }
    },
    computed: {
        totalNumber: function() {
            return this.list.length;
        },
        notDoneNumber: function() {
            this.notDoneList = this.list.filter(function(todo) {
                return !todo.isChecked;
            });
            return this.notDoneList.length;
        },
        filteredList: function() {
            let filtered = [];
            for(let i in this.list) {
                let todo = this.list[i];
                if(todo.text.indexOf(this.keyword) != -1) {
                    filtered.push(todo);
                }
            }   
            return filtered;
        }
    }
});