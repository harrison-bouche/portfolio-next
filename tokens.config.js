import StyleDictionary from 'style-dictionary';

function isHigherToken(filePath) {
    return (
        filePath.includes('tier-2-usage') || filePath.includes('tier-3-components')
    );
}

function mapWithThemePrefix(platform, token) {
    const tokenName = token.name.replace(`${platform.prefix}-`, '');

    if (isHigherToken(token.filePath)) {
        return `  --${platform.prefix}-theme-${tokenName}: ${token.value};`;
    } else {
        return `  --${platform.prefix}-${tokenName}: ${token.value};`;
    }
}

StyleDictionary.registerFormat({
    name: 'css/custom-variables',
    format: ({ dictionary, platform }) => {
        const mappedTokens = dictionary.allTokens.map((token) =>
            mapWithThemePrefix(platform, token),
        );
        return `:root {${mappedTokens.join('\n')}}`;
    },
});

export default {
    source: ['tokens/**/*.json'],
    platforms: {
        css: {
            prefix: 'bouche',
            transformGroup: 'css',
            buildPath: './resources/css/',
            files: [
                {
                    destination: '_variables.css',
                    format: 'css/custom-variables',
                },
            ],
        },
    },
};
