use katex::OutputType;
use regex::Regex;
use std::env;
use urlencoding::decode;

fn main() {
    // Get input

    let args: Vec<String> = env::args().collect();
    let mut contents: String = decode(&args[1]).unwrap().into_owned();

    // Parse math blocks

    let matches: Vec<String> = Regex::new(r"\$\$[^\$]+\$\$")
        .unwrap()
        .find_iter(&contents)
        .filter_map(|digits| digits.as_str().parse().ok())
        .collect();

    let opts = katex::Opts::builder()
        .display_mode(true)
        .output_type(OutputType::Mathml)
        .build()
        .unwrap();

    for mathblock in matches {
        let math = &mathblock[2..&mathblock.len() - 2];
        let html = katex::render_with_opts(math, &opts).unwrap();
        contents = contents.replace(&mathblock, &html);
    }

    // Parse inline math

    let matches: Vec<String> = Regex::new(r"\$[^\$]+\$")
        .unwrap()
        .find_iter(&contents)
        .filter_map(|digits| digits.as_str().parse().ok())
        .collect();

    let opts = katex::Opts::builder()
        .display_mode(false)
        .output_type(OutputType::Mathml)
        .build()
        .unwrap();

    for mathblock in matches {
        let math = &mathblock[1..&mathblock.len() - 1];
        let html = katex::render_with_opts(math, &opts).unwrap();
        contents = contents.replace(&mathblock, &html);
    }

    // Return output

    print!("{}", contents);
}
