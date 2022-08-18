use std::env;
use urlencoding::decode;

fn main() {
    let args: Vec<String> = env::args().collect();

    let contents: String = decode(&args[1]).unwrap().into_owned();

    print!("{}", bin::parse(contents));
}
