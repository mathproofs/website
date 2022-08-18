use katex::OutputType;
use regex::Regex;

pub fn parse(contents: String) -> String {
    // Math blocks
    let contents = search_and_replace(contents, r"\$\$[^\$]+\$\$", true, 2);

    // Inline math
    return search_and_replace(contents, r"\$[^\$]+\$", false, 1);
}

fn search_and_replace(contents: String, pattern: &str, display: bool, length: usize) -> String {
    let mut contents = contents;

    let matches: Vec<String> = Regex::new(pattern)
        .unwrap()
        .find_iter(&contents)
        .filter_map(|digits| digits.as_str().parse().ok())
        .collect();

    let opts = katex::Opts::builder()
        .display_mode(display)
        .output_type(OutputType::Mathml)
        .build()
        .unwrap();

    for mathblock in matches {
        let math = &mathblock[length..&mathblock.len() - length];
        let html = katex::render_with_opts(math, &opts).unwrap();
        contents = contents.replace(&mathblock, &html);
    }

    return contents;
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn it_can_parse_inline_math() {
        let input = "$ f(x) $";
        let output = "<span class=\"katex\"><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><semantics><mrow><mi>f</mi><mo stretchy=\"false\">(</mo><mi>x</mi><mo stretchy=\"false\">)</mo></mrow><annotation encoding=\"application/x-tex\"> f(x) </annotation></semantics></math></span>";
        assert_eq!(parse(input.to_string()), output.to_string());
    }

    #[test]
    fn it_can_parse_math_blocks() {
        let input = "$$ f(x) = x^2 $$";
        let output = "<span class=\"katex\"><math xmlns=\"http://www.w3.org/1998/Math/MathML\" display=\"block\"><semantics><mrow><mi>f</mi><mo stretchy=\"false\">(</mo><mi>x</mi><mo stretchy=\"false\">)</mo><mo>=</mo><msup><mi>x</mi><mn>2</mn></msup></mrow><annotation encoding=\"application/x-tex\"> f(x) = x^2 </annotation></semantics></math></span>";
        assert_eq!(parse(input.to_string()), output.to_string());
    }

    #[test]
    fn it_leaves_html() {
        let input = "<p>Here is function $ f $:</p><p>$$ f(x) = 2x^2 $$</p>";
        let output = "<p>Here is function <span class=\"katex\"><math xmlns=\"http://www.w3.org/1998/Math/MathML\"><semantics><mrow><mi>f</mi></mrow><annotation encoding=\"application/x-tex\"> f </annotation></semantics></math></span>:</p><p><span class=\"katex\"><math xmlns=\"http://www.w3.org/1998/Math/MathML\" display=\"block\"><semantics><mrow><mi>f</mi><mo stretchy=\"false\">(</mo><mi>x</mi><mo stretchy=\"false\">)</mo><mo>=</mo><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup></mrow><annotation encoding=\"application/x-tex\"> f(x) = 2x^2 </annotation></semantics></math></span></p>";
        assert_eq!(parse(input.to_string()), output.to_string());
    }
}
