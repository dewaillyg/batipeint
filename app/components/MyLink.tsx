import Link from "next/link"

type MyLinkProps = {
    value: string,
    url: string
}

export default function MyLink({ value, url }: MyLinkProps) {
    return (
        <Link className="flex" href={url}>
            <p className="mr-1">{value}</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6 text-highlight">
                <path strokeLinecap="round" strokeLinejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
        </Link>
    )
}