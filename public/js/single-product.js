var vm = new Vue({
    el: '#single-product',
    data: function () {
        return {
            core_count: '',
            thread_count: '',
            SMP_count_of_cpus: '',
            base_clock: '',
            boost: '',
            brand_image_source: '',
            cache_l1: '',
            cache_l2: '',
            cache_l3: '',
            codename: '',
            die_size: '',
            features: [],
            frequency: '',
            image_source: '',
            integrated_graphics: '',
            market: '',
            memory_support: '',
            multiplier: '',
            name: '',
            package: '',
            process_size: '',
            production_status: '',
            released: '',
            socket: '',
            tCaseMax: '',
            tdp: '',
            transistors: '',
            turbo_clock: '',
            voltage: ''
        }
    },
    methods: {
        getCPUData: function () {
            var uuid = $('meta[name=uuid]').attr("content");
            axios.get('/c/' + uuid)
                .then(function (response) {
                    alert(response.data);
                })
                .catch(function (error) {
                    console.log(error)
                })
        },
        setCPUData: function (data) {
            this.core_count = data['#of_cores'][0]['text'];
            this.thread_count = data['#of_threads'][0]['text'];
            this.SMP_count_of_cpus = data['SMP#of_CPUs'][0]['text'];
            this.base_clock = data['base_clock'][0]['text'];
            this.boost = data['boost'][0]['text'];
            this.brand_image_source = data['brand_image'][0]['src'];
            this.cache_l1 = data['cache_l1'][0]['text'];
            this.cache_l2 = data['cache_l2'][0]['text'];
            this.cache_l3 = data['cache_l3'][0]['text'];
            this.codename = data['codename'][0]['text'];
            this.die_size = data['die_size'][0]['text'];
            this.features = data['features'][0]['text'].split('\n ');
            this.frequency = data['frequency'][0]['text'];
            this.image_source = data['image'][0]['src'];
            this.integrated_graphics = data['integrated_graphics'][0]['text'];
            this.market = data['market'][0]['text'];
            this.memory_support = data['memory_support'][0]['text'];
            this.multiplier = data['multiplier'][0]['text'];
            this.name = data['name'][0]['text'];
            this.package = data['package'][0]['text'];
            this.process_size = data['process_size'][0]['text'];
            this.production_status = data['production_status'][0]['text'];
            this.released = data['released'][0]['text'];
            this.socket = data['socket'][0]['text'];
            this.tCaseMax = data['tCaseMax'][0]['text'];
            this.tdp = data['tdp'][0]['text'];
            this.transistors = data['transistors'][0]['text'];
            this.turbo_clock = data['turbo_clock'][0]['text'];
            this.voltage = data['voltage'][0]['text'];
        }
    }
});