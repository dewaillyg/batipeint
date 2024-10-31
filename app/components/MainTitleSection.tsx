type MainTitleSectionProps = {
    subtitle: string,
    title: string
}

export default function MainTitleSection({subtitle, title}: MainTitleSectionProps) {
    return (
        <>
            <div className="flex flex-col justify-center items-start">
                <span className="h-3 bg-highlight w-20"></span>
                <h5 className="text-xl font-bold font-fontHighlight mb-1 mt-2">{subtitle}</h5>
                <h2 className="text-5xl font-fontStack font-light">{title}</h2>
            </div>
        </>
    )
}