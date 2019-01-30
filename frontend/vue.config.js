module.exports = {
    devServer: {
        proxy: 'http://localhost:8001'
    },
    chainWebpack: config => {
        const oneOfsMap = config.module.rule('scss').oneOfs.store
        oneOfsMap.forEach(item => {
            item
                .use('sass-resources-loader')
                .loader('sass-resources-loader')
                .options({
                    resources: ['./src/style/vars.scss']
                })
                .end()
        })
    }
}